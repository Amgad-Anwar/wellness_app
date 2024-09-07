const socket = io();

// Listen for incoming messages
socket.on('chat message', (message) => {
    const messages = document.getElementById('messages');
    const item = document.createElement('li');
    item.textContent = message;
    messages.appendChild(item);
});

// Handle form submission
// document.getElementById('btn').addEventListener('click', (e) => {
//     e.preventDefault();
//     const input = document.getElementById('inputx');
//     console.log(input.value );
//     if (input.value) {
//         socket.emit('chat message', input.value);
//         input.value = '';
//     }
// });

function submit (){
    const input = document.getElementById('inputx');
    console.log(input.value );
    if (input.value) {
        socket.emit('chat message', input.value);
        input.value = '';
    }
}


