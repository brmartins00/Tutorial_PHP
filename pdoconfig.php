<?php

    $host = 'mysql';
    $dbname = 'teste';
    $username = 'root';
    $password = 'master';
    


    
    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname; charset=utf8", $username, $password,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        // echo "Conectado a $dbname em $host com sucesso.";
    } catch (PDOException $pe) {
        die("Não foi possível se conectar ao banco de dados $dbname :" . $pe->getMessage());
    }

    