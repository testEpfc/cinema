<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 

include "DBInfo.php";

$porteMysql = new PDO('mysql:host=localhost;dbname='.$DBName.';charset=utf8', 'root', '');
if(isset($_REQUEST['titre']) && isset($_REQUEST['date']) && isset($_REQUEST['description']))
{
    $titre = $_REQUEST['titre'];
    $date = $_REQUEST['date'];
    $description = $_REQUEST['description'];

//$titre = filter_var($titre, FILTER_SANITIZE_STRING);
//$date = filter_var($date, FILTER_SANITIZE_STRING);

$porteMysql->query("INSERT INTO `$DBName`.`film` (`id`, `titre`, `annee`, `description`) VALUES (NULL, \"$titre\", \"$date\", \"$description\")");
}
$reponse = $porteMysql->query("SELECT * FROM `$tableName`");
$reponseTitre = $porteMysql->query("SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='$DBName' AND `TABLE_NAME`='$tableName' ");

$all = $reponse->fetchAll();
$allTitre = $reponseTitre->fetchAll();
$row = sizeof($all,0);
$column = sizeof($allTitre,0);
?>


<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/cinema.css" rel="stylesheet" type="text/css"/>
        <link href="css/navigationBar.css" rel="stylesheet" type="text/css"/>
        <link href="css/responsiveTable.css" rel="stylesheet" type="text/css"/>
        
        <title>film</title>
    </head>
    <body>
        <?php include './header.php';?>
    <main>
        <h1>Ici le main FILMS</h1>
        <br>
        <a href="filmsImage.php"> <button> Image </button></a>
        <br>
        <br>
        
        <?php include 'responsiveTableFiller.php';
            responsiveTableFiller($all,$allTitre);
        ?>
        
        <br>
            
        <a href="form.php"> <button> add a film </button></a>
          
        
    </main>
    <?php include './footer.php'; ?>
    </body>
</html>
