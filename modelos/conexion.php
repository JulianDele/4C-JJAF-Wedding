<?php

class Conexion{
    static public function conectar(){
        $host = 'localhost';
        $dbname = 'boda';
        $user = 'root';

        $conectar = new PDO("mysql:host=localhost;dbname=boda", "root", "");

        $conectar -> exec("set names utf8");
        
        return $conectar;
    }
}