<!DOCTYPE html>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include "DBInfo.php";
try {
    $DBConn = new PDO("mysql:host=$serverName;dbname=$DBName;charset=utf8", $userName, $password);
    $DBConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if(isset($_REQUEST['id']) && !empty($_REQUEST['id']))
    {
        $id = $_REQUEST['id'];
        $answer = $DBConn->query("SELECT * FROM `film` WHERE id = \"$id\" ");
        $all = $answer->fetchAll();
    }
}
catch (PDOException $e)
{
    echo $e->getMessage();
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Films</title>
        <?php include 'CSSInclude.php';?>
    </head>
    <body>
        <?php include './header.php';?>
    <main>
        <!--<h1>Add Films</h1>-->
                <h1>
                    <?php                    
                    echo $all[0]['titre']; ;   
                    echo " (".$all[0]['annee'].")"; 
                    ?>
                </h1>
        
        <div class="contentContainer">
            <img src="<?php echo "DbAffiches/".$all[0]['poster'];     ?>">
            <div class="contentContainerInfo">
<!--                <h3>
                    <?php                    
//                    echo $all[0]['titre']; ;   
//                    echo " (".$all[0]['annee'].")"; 
                    ?>
                </h3>-->
            </div>
            <?php echo $all[0]['description']; ; ?>
        </div>
        
        
        
        
    </main>
    <?php include './footer.php'; ?>
    </body>
</html>
