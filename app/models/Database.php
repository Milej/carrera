<?php 

require_once './config/Core.php';

class DB{

    static public function Con(){

        if(ENVIROMENT === 'dev'){

            try {
                $con = new PDO('mysql:host=' . DB_HOST_DEV . ';dbname=' . DB_NAME_DEV, DB_USER_DEV, DB_PASSWORD_DEV);
                
                $con->exec("set names utf8");

                return $con;
    
            } catch (PDOException $e) {
    
                print "¡Error!: " . $e->getMessage() . "<br/>";
                die();
    
            }

        }else if(ENVIROMENT === 'production'){

            try {
                $con = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
                
                $con->exec("set names utf8");

                return $con;
    
            } catch (PDOException $e) {
    
                print "¡Error!: $e->getMessage() <br/>";
                die();
    
            }

        }


    }
}