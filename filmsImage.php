<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->



<?php 

include "DBInfo.php";

$porteMysql = new PDO('mysql:host=localhost;dbname='.$DBName.';charset=utf8', 'root', '');
$isEmpty = 1;
$badSearch = 0;
$badSearchMessage = "<h3 class='error'>The film you are looking for is not in our database</h3>";
if(isset($_REQUEST['search']) && !empty($_REQUEST['search']))
{
    $search = $_REQUEST['search'];

//    $reponse = $porteMysql->query("SELECT `titre`, `annee` FROM `film` WHERE titre=\"$search\"");
    $reponse = $porteMysql->query("SELECT `titre`, `annee` FROM `film` WHERE titre=\"$search\" OR annee=\"$search\"");
    //$porteMysql->query("INSERT INTO `$DBName`.`film` (`id`, `titre`, `annee`) VALUES (NULL, \"$titre\", \"$date\")");

    //$reponse = $porteMysql->query("SELECT * FROM `$tableName`");
    //$reponseTitre = $porteMysql->query("SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='$DBName' AND `TABLE_NAME`='$tableName' ");
    //
    $all = $reponse->fetchAll();
    //$allTitre = $reponseTitre->fetchAll();
    //$row = sizeof($all,0);
    //$column = sizeof($allTitre,0);

    $row = sizeof($all,0);
    if($row ==0)
    {
        $isEmpty = 1;
        $badSearch = 1;
    }
    else
    {
        $isEmpty = 0;
        $badSearch = 0;
    }
}
if($isEmpty)  
{
    $reponse = $porteMysql->query("SELECT `titre`, `annee` FROM `film`");
    $all = $reponse->fetchAll();
    $isEmpty = 1;
    $row = sizeof($all,0);
}
?>





<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/cinema.css" rel="stylesheet" type="text/css"/>
        <link href="css/navigationBar.css" rel="stylesheet" type="text/css"/>
        <link href="css/resultList.css" rel="stylesheet" type="text/css"/>
        <title> FilmsImage </title>
        <style>
        </style>
    </head>
    <body>
        <?php include './header.php';?>
    <main>
        <h1>Ici le main FilmsImage </h1>
        
        <?php // if($isEmpty){echo $all[0]['annee'];} ?>
        
        <form method="get">
            
            <input type="text" placeholder="type a film or a year to search here" name="search" value="" size="60px">
            <input type="submit" value="Search"><br><br><br>
            
        </form>
                       
         <?php if($badSearch){echo $badSearchMessage;} ?>
        <br>
        <a href="films.php"> <button> List </button></a>
        <br>
        <br>
        
        <table class="resultList">
            <?php for($i=0;$i<$row;++$i)
                {
            ?>
            
            <tr>
                <td>
                    <img src="DbAffiches/Affiche1.jpg" alt=""/>
                </td>
                <td>
                    <!--<li>-->
                        <?php // if(!$isEmpty){echo $all[0]['titre'];} ?>
                        <?php echo "<h3>".$all[$i]['titre']."</h3>"; ?>
                        <?php // if(!$isEmpty){echo $value;} ?>
                    <!--</li>-->
                    <!--<li>-->
                        <?php echo "<article>".$all[$i]['annee']."</article>"; ?>
                    <!--</li>-->
                </td>
            </tr>
            <?php }  ?>
        </table>
        <br>
        <a href="form.php"> <button> add a film </button></a>
        
        
    </main>
    <?php include './footer.php'; ?>
    </body>
</html>
