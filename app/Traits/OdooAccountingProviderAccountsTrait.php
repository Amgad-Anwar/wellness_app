<?php 
namespace App\Traits;
use Ripcord\Ripcord;

trait OdooAccountingProviderAccountsTrait 
{

    public function createOdooProvider( $provider_account )
    {  
        $url = env('odoo_url');
        $db = env('odoo_database');
        $username = env('odoo_username');
        $password = env('odoo_password');

        $common = Ripcord::client("$url/xmlrpc/2/common");
        $models = Ripcord::client("$url/xmlrpc/2/object");

        $uid = $common->authenticate($db, $username, $password, []);

        $partnerData = [
            'name' => $provider_account->provider_account_name_en ,
            'email' => $provider_account->email ?? "" ,
            'phone' => $provider_account->phone ?? "" ,
            'is_company' =>  true , 
        ];

        $partnerId = $models->execute_kw($db, $uid, $password, 'res.partner', 'create', [$partnerData]);

        if ($partnerId && is_numeric($partnerId) && (int)$partnerId == $partnerId) {
            return $partnerId;
        } else {
            return 0;
        }
    }

    public function readOdooProviders()
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

    public function updateOdooProvider( $provider_account )
    {
        $url = env('odoo_url');
        $db = env('odoo_database');
        $username = env('odoo_username');
        $password = env('odoo_password');

        $common = Ripcord::client("$url/xmlrpc/2/common");
        $models = Ripcord::client("$url/xmlrpc/2/object");

        $uid = $common->authenticate($db, $username, $password, []);
        $success = $models->execute_kw($db, $uid, $password, 'res.partner', 'write', [[ $provider_account->odoo_id ], [
            'name' => $provider_account->provider_account_name_en ,
            'email' => $provider_account->email ?? "" ,
            'phone' => $provider_account->phone ?? "" ,
            'is_company' =>  true , 
        ]]);
        return $success;
    }

    public function deleteOdooProvider( $provider_account )
    {
        $url = env('odoo_url');
        $db = env('odoo_database');
        $username = env('odoo_username');
        $password = env('odoo_password');

        $common = Ripcord::client("$url/xmlrpc/2/common");
        $models = Ripcord::client("$url/xmlrpc/2/object");

        $uid = $common->authenticate($db, $username, $password, []);

        $success = $models->execute_kw($db, $uid, $password, 'res.partner', 'unlink', [[$provider_account->odoo_id]]);
        return $success;
    }



}