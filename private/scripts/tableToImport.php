<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include "../../DBInfo.php";
//$tableToAdd = Array("film (2).sql","logInfo.sql");

$tableNumber= count($tableNames);
for($i=0;$i<$tableNumber;++$i)
{
    $tableToAdd[$i]= "".$tableNames[$i].".sql";
}



?>

