<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>sign in</title>
        <link href="css/cinema.css" rel="stylesheet" type="text/css"/>
        <link href="css/navigationBar.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php include './header.php';?>
    <main>
        <h1>Ici le main SIGN IN</h1>
        
        
        <form method="post" action="signinValidation.php">
            <table>
                <tr>
                    <td>
                        Username:
                    </td>
                    <td>
                        <input type="text" name="username" placeholder="username" value="toto">
                    </td>
                </tr>
                <tr>
                    <td>
                        Password:
                    </td>
                    <td>
                        <input type="password" name="password" placeholder="********" value="****">
                    </td>
                </tr>
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
