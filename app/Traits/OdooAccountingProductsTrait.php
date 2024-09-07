<?php

namespace App\Traits;

use Ripcord\Ripcord;

trait OdooAccountingProductsTrait
{

    public function createOdooProduct($name,  $description, $gross_price, $net_price, $default_code)
    {
        $url = env('odoo_url');
        $db = env('odoo_database');
        $username = env('odoo_username');
        $password = env('odoo_password');

        $common = Ripcord::client("$url/xmlrpc/2/common");
        $models = Ripcord::client("$url/xmlrpc/2/object");

        $uid = $common->authenticate($db, $username, $password, []);

        $partnerData = [
            'name' => $name . '(' .  $description  . ')' ,
            'description' => $description,
            'list_price' => $gross_price,
            'standard_price' => $net_price,
            'default_code' => $default_code,
            'supplier_taxes_id' => 0 ,
            'customer_taxes_id' => 0 , 
        ];

        $partnerId = $models->execute_kw($db, $uid, $password, 'product.product', 'create', [$partnerData]);

        if ($partnerId && is_numeric($partnerId) && (int)$partnerId == $partnerId) {
            return $partnerId;
        } else {
            return 0;
        }
    }

    public function readOdooProducts()
    {
        $url = env('odoo_url');
        $db = env('odoo_database');
        $username = env('odoo_username');
        $password = env('odoo_password');
        $common = Ripcord::client("$url/xmlrpc/2/common");
        $uid = $common->authenticate($db, $username, $password, []);
        $models = Ripcord::client("$url/xmlrpc/2/object");
        $partners = $models->execute_kw($db, $uid, $password, 'product.product', 'search_read', [[]], ['fields' => []]);
        return $partners;
    }

    public function updateOdooProduct($odoo_id, $name,  $description, $gross_price, $net_price, $default_code)
    {
        $url = env('odoo_url');
        $db = env('odoo_database');
        $username = env('odoo_username');
        $password = env('odoo_password');

        $common = Ripcord::client("$url/xmlrpc/2/common");
        $models = Ripcord::client("$url/xmlrpc/2/object");

        $uid = $common->authenticate($db, $username, $password, []);
        $success = $models->execute_kw($db, $uid, $password, 'product.product', 'write', [[$odoo_id], [
            'name' => $name . '(' .  $description  . ')' ,
            'description' => $description,
            'list_price' => $gross_price,
            'standard_price' => $net_price,
            'default_code' => $default_code,
            'supplier_taxes_id' => 0 ,
            'customer_taxes_id' => 0 , 
        ]]);
        return $success;
    }

    public function deleteOdooProduct($odoo_id)
    {
        $url = env('odoo_url');
        $db = env('odoo_database');
        $username = env('odoo_username');
        $password = env('odoo_password');

        $common = Ripcord::client("$url/xmlrpc/2/common");
        $models = Ripcord::client("$url/xmlrpc/2/object");

        $uid = $common->authenticate($db, $username, $password, []);

        $success = $models->execute_kw($db, $uid, $password, 'product.product', 'unlink', [[$odoo_id]]);
        return $success;
    }
}
