<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign Up</title>
<!--        <link href="css/cinema.css" rel="stylesheet" type="text/css"/>
        <link href="css/navigationBar.css" rel="stylesheet" type="text/css"/>-->
        <?php include "CSSInclude.php";?>
    </head>
    <body>
        <?php include './header.php';?>
    <main>
        <h1>Sign Up</h1>
        
        
        <form method="post" action="signupValidation.php">
            <table>
                <tr>
                    <td>
                        Username:
                    </td>
                    <td>
                        <input type="text" name="username" placeholder="username">
                    </td>
                </tr>
                <tr>
                    <td>
                        Password:
                    </td>
                    <td>
                        <input type="password" name="password" placeholder="********">
                    </td>
                </tr>
                <tr>
                    <td>
                        Email:
                    </td>
                    <td>
                        <input type="email" name="email" placeholder="address@domain.com">
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
