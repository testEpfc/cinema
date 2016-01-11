<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include "tableToImport.php";
include "createDB.php";
include "createDBTable.php";

createDB($serverName, $userName, $password, $DBName);
$tableN=count($tableToAdd);
for($i=0;$i<$tableN;++$i)
{
    createDBTable($serverName, $userName, $password, $DBName, $tableToAdd[$i]);
}
//    createDBTable($serverName, $userName, $password, $DBName, $tableToAdd[0]);
//    createDBTable($serverName, $userName, $password, $DBName, $tableToAdd[1]);
