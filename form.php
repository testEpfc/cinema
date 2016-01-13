<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Films</title>
        <link href="css/cinema.css" rel="stylesheet" type="text/css"/>
        <link href="css/navigationBar.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php include './header.php';?>
    <main>
        <h1>Add Films</h1>
        
        
        <form method="post" action="films.php">
            <table class="formTable">
                <tr>
                    <td>
                        Title:
                    </td>
                    <td>
                        <input type="text" name="titre" required placeholder="a title" value="">
                    </td>
                </tr>
                <tr>
                    <td>
                        Date:
                    </td>
                    <td>
                        <input type="number" name="date" required placeholder="1997" value="">
                        <!--<input type="number" name="date" required placeholder="1997" value="1338">-->
                    </td>
                </tr>
                <tr>
                    <td>
                        Description:
                    </td>
                    <td>
                        <!--<input type="text" name="description" required placeholder="the description" value="">-->
                        <textarea  name="description" required placeholder="the description" value=""></textarea>
                        <!--<text-area>-->
                    </td>
                </tr>
                <tr>
                    <td>
                        Poster name:
                    </td>
                    <td>
                        <!--<input type="text" name="poster" required placeholder="the poster's name" value="">-->
                        <input type="text" name="poster" placeholder="the poster's name" value="">
                    </td>
                </tr>
                <tr>
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
