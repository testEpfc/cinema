<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include "../../DBInfo.php";
//$serverName = "localhost";
//$userName = "root";
//$password = "";
try {
        $sql = "SHOW CREATE TABLE film";
        $conn = new PDO("mysql:host=$serverName;dbname=$DBName", $userName, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $result = $conn->query($sql);
        $result2 = $result->fetchAll();
//        echo $result;
        
        echo "<br>";
        echo $result2[0];
        echo "<br>";
        echo $result->fetchall()[0];
        echo "<br>";
        echo $result->fetchall()[0][0];
        echo "<br>";
        echo $result->fetchall()[0][1];
        echo "<br>";
        echo $result->fetchall()[1];
        echo "<br>";
        echo count($result->fetchall()[0]);
        echo "<br>";
        echo count($result->fetchall());
        echo "<br>";
        echo "Tables imported successfully<br>";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;



?>
