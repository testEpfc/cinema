<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->



<?php 

include "DBInfo.php";
$welcome = 0;
$username = "";
$porteMysql = new PDO('mysql:host=localhost;dbname='.$DBName.';charset=utf8', 'root', '');
if(isset($_REQUEST['username']) && isset($_REQUEST['password']) && isset($_REQUEST['email']))
{
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $email = $_REQUEST['email'];
    $welcome = 1;

$porteMysql->query("INSERT INTO `$DBName`.`$logTableName` (`id`, `nickname`, `password`, `email`) VALUES (NULL,\"$username\",\"$password\",\"$email\")");
//$porteMysql->query("INSERT INTO `$DBName`.`film` (`id`, `titre`, `annee`) VALUES (NULL, \"$titre\", \"$date\")");
}
//$reponse = $porteMysql->query("SELECT * FROM `$tableName`");
//$reponseTitre = $porteMysql->query("SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='$DBName' AND `TABLE_NAME`='$tableName' ");
//
//$all = $reponse->fetchAll();
//$allTitre = $reponseTitre->fetchAll();
//$row = sizeof($all,0);
//$column = sizeof($allTitre,0);
?>





<html>
    <head>
        <?php // if($isEmpty){ echo '<meta http-equiv="refresh" content="0; url=signin.php?error=1" />' ; }?>
        <meta http-equiv="refresh" content="0; url=index.php?welcome=<?php echo $welcome; ?>&username=<?php echo $username; ?>" />
        <meta charset="UTF-8">
<!--        <link href="css/cinema.css" rel="stylesheet" type="text/css"/>
        <link href="css/navigationBar.css" rel="stylesheet" type="text/css"/>-->
        <?php include "CSSInclude.php";?>
        <title> Sign Up Validation</title>
    </head>
    <body>
        <?php include './header.php';?>
    <main>
        <h1>Sign Up Validation</h1>
        
        
        <form method="post" action="signupValidation.php">
            <table>
                <tr>
                    <td>
                        Username:
                    </td>
                    <td>
                        <?php echo $_REQUEST['username'];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Password:
                    </td>
                    <td>
                        <?php // echo $_REQUEST['password'];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Email:
                    </td>
                    <td>
                        <?php // echo $_REQUEST['email'];
                        ?>
                    </td>
                </tr>
            
            </table>
        </form>
        
        
        
        
    </main>
    <?php include './footer.php'; ?>
    </body>
</html>
