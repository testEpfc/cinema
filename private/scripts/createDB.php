<?php
//$servername = "localhost";
//$username = "root";
//$password = "";
//$database = "cinema3";
//$sql = "";

function createDB($serverName,$userName, $password, $database) {
    $conn = null;
    $sql = "sql not used";
    try {
        $conn = new PDO("mysql:host=$serverName", $userName, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "CREATE DATABASE IF NOT EXISTS `$database` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin";
        $conn->exec($sql);
        echo "Database created successfully<br>";
    }
    catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
}





?> 
