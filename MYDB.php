<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function db_connect(){
        $db_user="root";
        $db_pass="";
        $db_host="localhost";
        $db_name="sampledb";
        $db_type="mysql";
        
        $dsn="$db_type:host=$db_host;dbname=$db_name;charset=utf8";
        
        try{
            $pdo=new PDO($dsn,$db_user,$db_pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        } catch (PDOException $Exception) {
            die('エラー：'.$Exception->getMessage());
        }
        
        return $pdo;
}