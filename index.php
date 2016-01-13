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
<!--        <link href="css/cinema.css" rel="stylesheet" type="text/css"/>
        <link href="css/navigationBar.css" rel="stylesheet" type="text/css"/>-->
        
        <?php include "CSSInclude.php";?>
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
        <?php if(isset($_REQUEST['welcome']) && !empty($_REQUEST['welcome']) && isset($_REQUEST['username']) && !empty($_REQUEST['username']))
        { 
            if($_REQUEST['welcome'] == 1) {   ?>
        <div class="goodFeedBack">
            Welcome to Cinema, <?php echo $_REQUEST['username'] ?>
        </div>
        <?php } 
        elseif($_REQUEST['welcome'] == 2) {   ?>
        <div class="goodFeedBack">
            Welcome back to Cinema, <?php echo $_REQUEST['username'] ?>
        </div>
        <?php }} ?>
    <main>
        
        <h1>Home</h1>
        
        <ul style="list-style: none">
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
