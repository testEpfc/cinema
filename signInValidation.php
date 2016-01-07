<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->



<?php 

include "DBInfo.php";

$porteMysql = new PDO('mysql:host=localhost;dbname='.$DBName.';charset=utf8', 'root', '');
if(isset($_REQUEST['username']) && isset($_REQUEST['password']))
{
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    $reponse = $porteMysql->query("SELECT `id`, `nickname`, `password`, `email` FROM `$logTableName` WHERE nickname = '$username' AND password='$password'");
//    $reponse = $porteMysql->query("SELECT * FROM `$logTableName`");
    //$porteMysql->query("INSERT INTO `$DBName`.`$logTableName` (`id`, `nickname`, `password`, `email`) VALUES (NULL,\"$username\",\"$password\",\"$email\")");
    //$porteMysql->query("INSERT INTO `$DBName`.`film` (`id`, `titre`, `annee`) VALUES (NULL, \"$titre\", \"$date\")");
//        $porteMysql->query("INSERT INTO `$DBName`.`film` (`id`, `titre`, `annee`) VALUES (NULL, \"$titre\", \"$date\")");

    //$reponse = $porteMysql->query("SELECT * FROM `$tableName`");
    //$reponseTitre = $porteMysql->query("SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='$DBName' AND `TABLE_NAME`='$tableName' ");
    //
    $all = $reponse->fetchAll();
    //$allTitre = $reponseTitre->fetchAll();
    //$row = sizeof($all,0);
    //$column = sizeof($allTitre,0);
    if(empty($all))
    {
        $errMessage = "empty";
        $isEmpty = 1;
    }
    else
    {
        $errMessage = "notEmpty";
        $isEmpty = 0;
    }
}
?>





<html>
    <head>
        <?php if($isEmpty){ echo '<meta http-equiv="refresh" content="0; url=signin.php?error=1" />' ; }?>
        <meta charset="UTF-8">
        <link href="css/cinema.css" rel="stylesheet" type="text/css"/>
        <link href="css/navigationBar.css" rel="stylesheet" type="text/css"/>
        <title>signupValidation</title>
    </head>
    <body>
        <?php include './header.php';?>
    <main>
        <h1>Ici le main SIGN IN Validation</h1>
        
        <h5><?php if($isEmpty){ echo $errMessage ;}   ?></h5>
        
        <form method="post" action="signupValidation.php">
            <table>
                <tr>
                    <td>
                        Username:
                    </td>
                    <td>
                        <?php if(!$isEmpty){ echo $all[0]['nickname'];}
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Password:
                    </td>
                    <td>
                        <?php if(!$isEmpty){ echo $all[0]['password'];}
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Email:
                    </td>
                    <td>
                        <?php if(!$isEmpty){ echo $all[0]['email'];}
                        ?>
                    </td>
                </tr>
            
            </table>
        </form>
        
        
        
        
    </main>
    <?php include './footer.php'; ?>
    </body>
</html>
