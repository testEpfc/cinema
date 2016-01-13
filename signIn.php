<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<?php 

include "DBInfo.php";
$isEmpty = 1;
$isCorrect = 1;

$porteMysql = new PDO('mysql:host='.$serverName.';dbname='.$DBName.';charset=utf8', $userName, $password);
if(isset($_REQUEST['username']) && isset($_REQUEST['password']) && !empty($_REQUEST['username']) && !empty($_REQUEST['password']))
{
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    $reponse = $porteMysql->query("SELECT `id`, `nickname`, `password`, `email` FROM `$logTableName` WHERE nickname = '$username' AND password='$password'");

    $all = $reponse->fetchAll();
    
    if(empty($all))
    {
        $errMessage = "empty";
        $isEmpty = 1;
        $isCorrect = 0;
    }
    else
    {
        $errMessage = "notEmpty";
        $isEmpty = 0;
        $isCorrect = 1;
    }
}
?>


<html>
    <head>
        <?php if(!$isEmpty && $isCorrect){ echo '<meta http-equiv="refresh" content="0; url=index.php?welcome=2&username='.$username.'" />' ; }?>
        <meta charset="UTF-8">
        <title>Sign In</title>
<!--        <link href="css/cinema.css" rel="stylesheet" type="text/css"/>
        <link href="css/navigationBar.css" rel="stylesheet" type="text/css"/>-->
        <?php include "CSSInclude.php";?>
    </head>
    <body>
        <?php include './header.php';?>
    <main>
        <h1>Sign In</h1>
        
        <?php if($isEmpty && !$isCorrect){ echo "<h3 class='error'>The username and/or the password are wrong. Try again</h3>";} ?>
        <!--<form method="get" action="signinValidation.php">-->
        <form method="post">
            <table>
                <tr>
                    <td>
                        Username:
                    </td>
                    <td>
                        <input type="text" name="username" placeholder="username" value="">
                    </td>
                </tr>
                <tr>
                    <td>
                        Password:
                    </td>
                    <td>
                        <input type="password" name="password" placeholder="********" value="">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <input type="submit" value="submit"></input>
                    </td>
                </tr>
            
            </table>
        </form>
        
        
        
        
    </main>
    <?php include './footer.php'; ?>
    </body>
</html>
