<?php 
namespace App\Traits;

trait DecryptTrait 
{
    public function decrypt($encryptedData)
    {
        $key = "base64:+e9kH6czE24bW1Jiqrek8fvbEiPzIsJhs3mxCS+gtmo=";
        $data = base64_decode($encryptedData);
        $iv = substr($data, 0, 16);
        $encrypted = substr($data, 16);        // Pad or truncate the IV to ensure it is exactly 16 bytes long
        $iv = str_pad($iv, 16, "\0");
        return openssl_decrypt($encrypted, 'aes-256-cbc', $key, 0, $iv);

       // return decrypt($encryptedData ) ;

    }


    public function encrypt($data)
    {
         $key = "base64:+e9kH6czE24bW1Jiqrek8fvbEiPzIsJhs3mxCS+gtmo=";
        $iv = openssl_random_pseudo_bytes(16);
        $encrypted = openssl_encrypt($data, 'aes-256-cbc', $key, 0, $iv);
        return base64_encode($iv . $encrypted);
       // return encrypt($data ) ;

    }
   


}