const express = require('express');
var fs = require('fs');
const http = require('http');
const cors = require('cors');
const socketIO = require('socket.io');


const app = express();
const corsOptions = {
    origin: 'https://med.medlite.app',
    methods: ['GET', 'POST']
};
app.use(cors(corsOptions))
//const server = http.createServer(app);
app.use(express.urlencoded({ extended: true }));

var https = require('https');
// const io = socketIO(server);

var privateKey  = fs.readFileSync('sslcert/privatekey.pem', 'utf8');
var certificate = fs.readFileSync('sslcert/certificate.pem', 'utf8');
var cabundle = fs.readFileSync('sslcert/cabundle.pem', 'utf8');

var credentials = {key: privateKey, cert: certificate,ca:cabundle};
var httpsServer = https.createServer(credentials, app);
// socket.io v2
// const io = require('socket.io')(httpsServer);
// socket.io v3
const { Server } = require("socket.io");
const io = new Server(httpsServer,);

app.use(express.static(__dirname + '/public'));

const dotenv = require('dotenv');
dotenv.config({ path: '../.env' });
const mysql = require('mysql');

const DB_HOST = process.env.DB_HOST;
const DB_DATABASE = process.env.DB_DATABASE;
const DB_USERNAME = process.env.DB_USERNAME;
const DB_PASSWORD = process.env.DB_PASSWORD;

const pool = mysql.createPool({
    host: DB_HOST,
    user: DB_USERNAME,
    password: DB_PASSWORD,
    database: DB_DATABASE,
    connectionLimit: 10 // set the maximum number of connections in the pool
});

function executeQuery(query, values) {
    console.log(`Query: ${query}, Values: ${JSON.stringify(values)}`);
    return new Promise((resolve, reject) => {
        // acquire a connection from the pool
        pool.getConnection((err, connection) => {
            if (err) {
                reject(err);
                return;
            }

            // execute the query
            connection.query(query, values, (error, results, fields) => {
                // release the connection back to the pool
                connection.release();

                if (error) {
                    reject(error);
                    return;
                }
                console.log('db success');
                resolve(results);
            });
        });
    });
}

const socketTransactionMap = {};
const transactionSocketIDsMap = {};
const socketStaffMap = {};
const staffSocketIDsMap = {};
io.on('connection', (socket) => {
    console.log('New user connected' + socket.id );


    socket.on('SCAN_QR_EVENT', (transaction_id) => {
        console.log('transaction_id: ', transaction_id);
    });
    socket.on('PAYMENT_EVENT', (transaction_id) => {
        console.log('transaction_id: ', transaction_id);
    });


    socket.on('STORE_TRANSACTION_DATA', (data) => {
        socketTransactionMap[socket.id ] = data.transaction_id ;
        if (!transactionSocketIDsMap[data.transaction_id]) {
            transactionSocketIDsMap[data.transaction_id ]  = [socket.id ];
        } else {
            transactionSocketIDsMap[data.transaction_id ].push( socket.id );
        }
    });

    socket.on('STORE_USER_DATA', (data) => {
        socketStaffMap[socket.id ] = data.staff_id ;
        if (!staffSocketIDsMap[data.staff_id]) {
            staffSocketIDsMap[data.staff_id ]  = [socket.id ];
        } else {
            staffSocketIDsMap[data.staff_id ].push( socket.id );
        }
    });

    
    // Handle disconnection
    socket.on('disconnect', () => {
        const transactionId = socketTransactionMap[socket.id];
        if (transactionId) {
            delete socketTransactionMap[socket.id];

            const socketIds = transactionSocketIDsMap[transactionId];
            if (socketIds) {
                const index = socketIds.indexOf(socket.id);
                if (index !== -1) {
                    socketIds.splice(index, 1);
                    if (socketIds.length === 0) {
                        delete transactionSocketIDsMap[transactionId];
                    }
                }
            }
        }

        const staffId = socketStaffMap[socket.id];
        if (staffId) {
            delete socketStaffMap[socket.id];

            const socketIds = staffSocketIDsMap[staffId];
            if (socketIds) {
                const index = socketIds.indexOf(socket.id);
                if (index !== -1) {
                    socketIds.splice(index, 1);
                    if (socketIds.length === 0) {
                        delete staffSocketIDsMap[staffId];
                    }
                }
            }
        }
        console.log('User disconnected: ' + socket.id);

    });
});


app.get('/emit_scan_event/:transaction_id', (req, res) => {
    const transaction_id = req.params.transaction_id;
    const socketIds = transactionSocketIDsMap[transaction_id];
    if (socketIds && socketIds.length > 0) {
        socketIds.forEach(socketId => {
            io.to(socketId).emit('SCAN_QR_EVENT', transaction_id);
        });
        res.send('Custom event emitted to specific users for transaction_id: ' + transaction_id);
    } else {
        res.send('No sockets found for transaction_id: ' + transaction_id);
    }
});

app.get('/emit_scan_to_user_event/:transaction_id/:staff_id', (req, res) => {
    const transaction_id = req.params.transaction_id;
    const staff_id = req.params.staff_id;
    const socketIds = staffSocketIDsMap[staff_id];
    if (socketIds && socketIds.length > 0) {
        socketIds.forEach(socketId => {
            io.to(socketId).emit('SCAN_QR_EVENT', transaction_id);
        });
        res.send('Custom event emitted to specific users for transaction_id: ' + transaction_id);
    } else {
        res.send('No sockets found for transaction_id: ' + transaction_id);
    }
});


app.get('/emit_payment_event/:transaction_id', (req, res) => {
    const transaction_id = req.params.transaction_id;
    const socketIds = transactionSocketIDsMap[transaction_id];
    if (socketIds && socketIds.length > 0) {
        socketIds.forEach(socketId => {
            io.to(socketId).emit('PAYMENT_EVENT', transaction_id);
        });
        res.send('Custom event emitted to specific users for transaction_id: ' + transaction_id);
    } else {
        res.send('No sockets found for transaction_id: ' + transaction_id);
    }
});



 httpsServer.listen(4000);
// server.listen(4000, () => {
//     console.log('Server is running on port 4000');
// });
