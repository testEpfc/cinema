<?php
    //SOURECE : http://www.tutorialspoint.com/php/perform_mysql_backup_php.htm

//bad destination && bad format

function exportDBTable($serverName,$userName, $password, $database, $tableName, $backUpFile) {
    
    $sql = "SELECT * INTO OUTFILE '$backUpFile' FROM $tableName";
    try {
        $conn = new PDO("mysql:host=$serverName;dbname=$database", $userName, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->exec($sql);
        echo "Backedup  data successfully<br>";
    }
    catch(PDOException $e)
    {
      echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
}

    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'cinema';
    $table = 'film';
    $backUpFile = 'filmTEST.sql';
    exportDBTable($host, $username, $password, $database, $table, $backUpFile);

    
//   $table_name = "employee";
//   $backup_file  = "/tmp/employee.sql";






?>