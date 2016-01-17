<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
$sessionUser = 'disconnected';
$isLogged = 0;
if(isset($_SESSION['userID']) && !empty($_SESSION['userID']))
{
    $sessionUser = $_SESSION['userID'];
    $isLogged = 1;
}
//else 
//{
//    $isLogged = 1;
//}

?>