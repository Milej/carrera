<?php

require_once './config/Core.php';

class Encryptor{

    function Encrypt($data){

        $output = false;
        
        $key = hash('sha256', SECRETKEY);
        $iv = substr(hash('sha256', SECRETIV), 0, 16);

        $output = openssl_encrypt($data, 'AES-256-CBC', $key, 0, $iv);

        $output = base64_encode($output);

        return $output;

    }

    function Decrypt($data){

        $key = hash('sha256', SECRETKEY);
        $iv = substr(hash('sha256', SECRETIV), 0, 16);

        $output = openssl_decrypt(base64_decode($data), 'AES-256-CBC', $key, 0, $iv);

        return $output;

    }
}