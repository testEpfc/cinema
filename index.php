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
/*            ul {
                 list-style: none;
            }
            li {
                display: inline-block;
                float:left;
            }
            a {
            text-decoration: none;
            display: inline-block;
            display: block;
            background-color: white;
            padding: 10px;
}*/
        </style>
    </head>
    <body>
        <?php include './header.php';?>
    <main>
        <h1>Ici le main Index</h1>
        
        <ul>
            <li>
                <!--<button><a href="films.php"> films list </a></button>-->
               <a href="films.php"> films list </a>
            </li>
            <li>
                <a href="form.php"> add a film </a>
            </li>
            <li>
                <a href="signup.php"> sign up </a>
            </li>
        </ul>
        
        
        
        
        
    </main>
    <?php include './footer.php'; ?>
    </body>
</html>