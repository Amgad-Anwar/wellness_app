<?php 
namespace App\Traits;
use Ripcord\Ripcord;

trait OdooAccountingCustomersTrait 
{

    public function createOdooCustomer( $customer_model )
    {  
        $url = env('odoo_url');
        $db = env('odoo_database');
        $username = env('odoo_username');
        $password = env('odoo_password');

        $common = Ripcord::client("$url/xmlrpc/2/common");
        $models = Ripcord::client("$url/xmlrpc/2/object");

        $uid = $common->authenticate($db, $username, $password, []);

        $partnerData = [
            'name' => $customer_model->account_name ,
            'email' => $customer_model->email ?? "" ,
            'phone' => $customer_model->phone ,
            'is_company' => false , 
        ];

        $partnerId = $models->execute_kw($db, $uid, $password, 'res.partner', 'create', [$partnerData]);

        if ($partnerId && is_numeric($partnerId) && (int)$partnerId == $partnerId) {
            return $partnerId;
        } else {
            return 0;
        }
    }

    public function readOdooCustomers()
    {
        $url = env('odoo_url');
        $db = env('odoo_database');
        $username = env('odoo_username');
        $password = env('odoo_password');
        $common = Ripcord::client("$url/xmlrpc/2/common");
        $uid = $common->authenticate($db, $username, $password, [] );   
        $models = Ripcord::client("$url/xmlrpc/2/object");
        $partners = $models->execute_kw($db, $uid, $password, 'res.partner' , 'search_read', [[]], ['fields' => []]);
        return $partners ;
    }

    public function updateOdooCustomer( $customer_model )
    {
        $url = env('odoo_url');
        $db = env('odoo_database');
        $username = env('odoo_username');
        $password = env('odoo_password');

        $common = Ripcord::client("$url/xmlrpc/2/common");
        $models = Ripcord::client("$url/xmlrpc/2/object");

        $uid = $common->authenticate($db, $username, $password, []);
        $success = $models->execute_kw($db, $uid, $password, 'res.partner', 'write', [[ $customer_model->odoo_id ], [
            'name' => $customer_model->account_name ,
            'email' => $customer_model->email ?? "" ,
            'phone' => $customer_model->phone ,
            'is_company' => false , 
        ]]);
        return $success;
    }

    public function deleteOdooCustomer( $customer_model )
    {
        $url = env('odoo_url');
        $db = env('odoo_database');
        $username = env('odoo_username');
        $password = env('odoo_password');

        $common = Ripcord::client("$url/xmlrpc/2/common");
        $models = Ripcord::client("$url/xmlrpc/2/object");

        $uid = $common->authenticate($db, $username, $password, []);

        $success = $models->execute_kw($db, $uid, $password, 'res.partner', 'unlink', [[$customer_model->odoo_id]]);
        return $success;
    }



}