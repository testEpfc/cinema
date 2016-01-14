<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include "DBInfo.php";
try {
    $DBConn = new PDO("mysql:host=$serverName;dbname=$DBName;charset=utf8", $userName, $password);
    $DBConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if(isset($_REQUEST['id']) && !empty($_REQUEST['id']))
    {
        $id = $_REQUEST['id'];
        $answer = $DBConn->query("SELECT * FROM `film` WHERE id = \"$id\" ");
        $all = $answer->fetchAll();
    }
}
catch (PDOException $e)
{
    echo $e->getMessage();
}