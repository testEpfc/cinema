<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Index</title>
        <link href="css/cinema.css" rel="stylesheet" type="text/css"/>
        <link href="css/navigationBar.css" rel="stylesheet" type="text/css"/>
        <style>
            ul {
                 list-style: none;
            }
            li {
                display: inline-block;
            }
        </style>
    </head>
    <body>
        <?php include './header.php';?>
    <main>
        <h1>Ici le main Index</h1>
        
        <ul>
            <li>
                <button><a href="films.php"> films list </a></button>
            </li>
            <li>
                <button><a href="form.php"> add a film </a></button>
            </li>
            <li>
                <button><a href="signup.php"> sign up </a></button>
            </li>
        </ul>
        
        
        
        
        
    </main>
    <?php include './footer.php'; ?>
    </body>
</html>
