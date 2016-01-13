<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->



<?php 



include "DBInfo.php";
try {
    //$porteMysql = new PDO('mysql:host=localhost;dbname='.$DBName.';charset=utf8', 'root', '');
    $porteMysql = new PDO("mysql:host=$serverName;dbname=$DBName;charset=utf8", $userName, $password);
    //$porteMysql = new PDO("mysql:host=$serverName", $userName, $password);
    $porteMysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    if(isset($_REQUEST['titre']) && isset($_REQUEST['date']) && isset($_REQUEST['description']))
    {
        $titre = $_REQUEST['titre'];
        $date = $_REQUEST['date'];
        $description = $_REQUEST['description'];

    //$titre = filter_var($titre, FILTER_SANITIZE_STRING);
    //$date = filter_var($date, FILTER_SANITIZE_STRING);

    $porteMysql->query("INSERT INTO `$DBName`.`film` (`id`, `titre`, `annee`, `description`) VALUES (NULL, \"$titre\", \"$date\", \"$description\")");
    }
    
    
    
    
//    $reponse = $porteMysql->query("SELECT * FROM `$tableName`");
//    $reponseTitre = $porteMysql->query("SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='$DBName' AND `TABLE_NAME`='$tableName' ");

//    $all = $reponse->fetchAll();
//    $allTitre = $reponseTitre->fetchAll();
//    $row = sizeof($all,0);
//    $column = sizeof($allTitre,0);
    ///////////


    //include "DBInfo.php";

//    $porteMysql = new PDO('mysql:host=localhost;dbname='.$DBName.';charset=utf8', 'root', '');
    $isList = 0;
    $isEmpty = 1;
    $badSearch = 0;
    $search = '';
    $badSearchMessage = "<h3 class='error'>The film you are looking for is not in our database</h3>";
    if(isset($_REQUEST['search']) && !empty($_REQUEST['search']))
    {
        $search = $_REQUEST['search'];

    //    $reponse = $porteMysql->query("SELECT `titre`, `annee` FROM `film` WHERE titre=\"$search\"");
    //    $reponse = $porteMysql->query("SELECT `titre`, `annee`, `description` FROM `film` WHERE titre=\"$search\" OR annee=\"$search\"");
//        $reponse = $porteMysql->query("SELECT `titre`, `annee`, `description` FROM `film` WHERE titre LIKE \"%$search%\" OR annee LIKE \"%$search%\"");
        $reponse = $porteMysql->query("SELECT * FROM `film` WHERE titre LIKE \"%$search%\" OR annee LIKE \"%$search%\"");

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
//        $reponse = $porteMysql->query("SELECT `titre`, `annee`, `description` FROM `film`");
        $reponse = $porteMysql->query("SELECT * FROM `film`");
        $all = $reponse->fetchAll();
        $isEmpty = 1;
        $row = sizeof($all,0);
    }
    $reponseTitre = $porteMysql->query("SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='$DBName' AND `TABLE_NAME`='$tableName' ");
    $allTitre = $reponseTitre->fetchAll();
    if(isset($_REQUEST['isList']) && !empty($_REQUEST['isList']))
    {
        $isList = $_REQUEST['isList'];
    }
    
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$porteMysql = null;
?>





<html>
    <head>
        <meta charset="UTF-8">
<!--        <link href="css/cinema.css" rel="stylesheet" type="text/css"/>
        <link href="css/navigationBar.css" rel="stylesheet" type="text/css"/>
        <link href="css/resultList.css" rel="stylesheet" type="text/css"/>
        <link href="css/responsiveTable.css" rel="stylesheet" type="text/css"/>-->
        <?php include "CSSInclude.php";?>
        <title> Films </title>
        <style>
        </style>
    </head>
    <body>
        <?php include './header.php';?>
    <main>
        <h1> Films </h1>
        <!--<br>-->
        <!--<br>-->
        
        <?php // if($isEmpty){echo $all[0]['annee'];} ?>
        
<!--        <form method="get">
            
            <input type="text" placeholder="type a film or a year to search here" name="search" value="" size="60px" autofocus="autofocus">
            <input type="hidden" name="isList" value="<?php // echo $isList; ?>">
            <input type="submit" value="Search"><br><br><br>
            
        </form>-->
                       
         <?php if($badSearch){echo $badSearchMessage;} ?>
        <br>
        <ul class="navbar miniNavbar">
        <!--<div style="width: 10px;">dsqf</div>-->
        <!--<li style="width: 50px;height:1px;"></li>-->
        <!--<li style="margin: auto;height:1px;"></li>-->
        <li>
        <?php
        
        if($isList  == 1)
        {
            $listClass = ' class="active"';
            $imageClass = '';
            $gridClass = '';
        }
        elseif($isList  == 0)
        {
            $listClass = '';
            $imageClass = ' class="active"';
            $gridClass = '';
        }
        else
        {
            $listClass = '';
            $imageClass = '';
            $gridClass = ' class="active"';
        }
        ?>
        <?php if($isEmpty)
        {
//            echo '<a href="films.php?isList=1"> <button> List </button></a></li><li>';
//            echo '<a href="films.php?isList=0"> <button> Image </button></a>';
            echo '<a href="films.php?isList=1"'.$listClass.'> List </a></li><li>';
            echo '<a href="films.php?isList=0"'.$imageClass.'> Image </a></li><li>';
            echo '<a href="films.php?isList=2"'.$gridClass.'> Grid </a>';
        }
        else
        {
//            echo '<a href="films.php?isList=1&search='.$search.'"> <button> List </button></a>';
//            echo '<a href="films.php?isList=0&search='.$search.'"> <button> Image </button></a>';
            echo '<a href="films.php?isList=1&search='.$search.'"'.$listClass.'> List </a></li><li>';
            echo '<a href="films.php?isList=0&search='.$search.'"'.$imageClass.'> Image </a></li><li>';
            echo '<a href="films.php?isList=2&search='.$search.'"'.$gridClass.'> Grid </a>';
        }
        ?>
        </li></ul>
        <!--<input type="button" name=""-->
<!--        <br>
        <br>-->
        
        <?php 
        if($isList == 1)
        {
            include 'responsiveTableFillerWithoutJS.php';
            responsiveTableFiller($all,$allTitre);
        }
//        elseif($isList == 0)
        elseif($isList == 0)
        {
            include 'resultListFiller.php';
            resultListFiller($all);
        }
        elseif($isList == 2)
        {
            include 'gridTableFiller.php';
            gridTableFiller($all);
        }
        ?>
        
        <br>
        <a href="form.php"> <button> add a film </button></a>
        
        
    </main>
    <?php include './footer.php'; ?>
    </body>
</html>
