<?php
class Database{

    public static function getPdo(){
        return  new PDO('mysql:host=localhost;dbname=houda', 'root','root');
    }

    
}


