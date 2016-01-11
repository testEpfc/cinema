<?php
    //SOURECE : http://stackoverflow.com/questions/19751354/how-to-import-sql-file-in-mysql-database-using-php

    //include 'TableToImport.php';

    // Name of the file
//    $fileName = 'private/scripts/film (2).sql';
//    // MySQL host
//    $host = 'localhost';
//    // MySQL username
//    $username = 'root';
//    // MySQL password
//    $password = '';
//    // Database name
//    $database = 'cinema';

    
    
function createDBTable($serverName,$userName, $password, $database, $fileName) {
    
    // Temporary variable, used to store current query
    $templine = '';
    try {
        // Connect to MySQL server
        //mysql_connect($mysql_host, $mysql_username, $mysql_password) or die('Error connecting to MySQL server: ' . mysql_error());
//        $conn = new PDO("mysql:host=$host;dbname='TestDB'", $username, $password);
        $conn = new PDO("mysql:host=$serverName;dbname=$database", $userName, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Select database
        //mysql_select_db($mysql_database) or die('Error selecting MySQL database: ' . mysql_error());

        // Read in entire file
        $lines = file($fileName);
        // Loop through each line
        foreach ($lines as $line)
        {
            // Skip it if it's a comment
            if (substr($line, 0, 2) == '--' || $line == '')
                continue;

            // Add this line to the current segment
            $templine .= $line;
            // If it has a semicolon at the end, it's the end of the query
            if (substr(trim($line), -1, 1) == ';')
            {
                // Perform the query
            //    mysql_query($templine) or print('Error performing query \'<strong>' . $templine . '\': ' . mysql_error() . '<br /><br />');
                $conn->exec($templine);
                // Reset temp variable to empty
                $templine = '';
            }
        }

        echo "Tables imported successfully<br>";
    }
    catch(PDOException $e)
    {
        echo $templine . "<br>" . $e->getMessage();
    }

    $conn = null;
}
?>