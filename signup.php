<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.


<?php 

include "DBInfo.php";
//$isCorrect = 0;
$isEmpty= 1;
$username = "";
$porteMysql = new PDO('mysql:host=localhost;dbname='.$DBName.';charset=utf8', 'root', '');
if(isset($_REQUEST['username']) && isset($_REQUEST['password']) && isset($_REQUEST['email'])
      &&  !empty($_REQUEST['username']) && !empty($_REQUEST['password']) && !empty($_REQUEST['email']))
{
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $email = $_REQUEST['email'];
    $isEmpty = 0;

$porteMysql->query("INSERT INTO `$DBName`.`$logTableName` (`id`, `nickname`, `password`, `email`) VALUES (NULL,\"$username\",\"$password\",\"$email\")");
}
?>



-->
<html>
    <head>
         <?php if(!$isEmpty){ echo '<meta http-equiv="refresh" content="0; url=index.php?welcome=1&username='.$username.'" />' ; }?>
         <meta charset="UTF-8">
        <title>Sign Up</title>
<!--        <link href="css/cinema.css" rel="stylesheet" type="text/css"/>
        <link href="css/navigationBar.css" rel="stylesheet" type="text/css"/>-->
        <?php include "CSSInclude.php";?>
    </head>
    <body>
        <?php include './header.php';?>
    <main>
        <h1>Sign Up</h1>
        
        
        <!--<form method="post" action="signupValidation.php">-->
        <form method="post">
            <table>
                <tr>
                    <td>
                        Username:
                    </td>
                    <td>
                        <input type="text" name="username" placeholder="username">
                    </td>
                </tr>
                <tr>
                    <td>
                        Password:
                    </td>
                    <td>
                        <input type="password" name="password" placeholder="********">
                    </td>
                </tr>
                <tr>
                    <td>
                        Email:
                    </td>
                    <td>
                        <input type="email" name="email" placeholder="address@domain.com">
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
