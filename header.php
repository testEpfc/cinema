<?php 
$srcImage = "ressources/1.jpg ";
$srcImage = "ressources/chess_board_glass_black_white_surface_15259_2560x1024.jpg ";
$srcImage = "ressources/dark-clouds-over-hollywood.jpg ";
$srcImage = "ressources/hollywood.jpg ";
//$links = array('index.php','signin.php','signup.php','films.php','form.php');
//$links = array('index.php','films.php','form.php','account.php','signin.php','signup.php');
$links = array('index.php','films.php','form.php','account.php','signin.php','signup.php');
$activeMark = '" class="active';
$linksSize = count($links);
//for($i=0;$i<4;++$i )
for($i=0;$i<$linksSize;++$i )
{
    if("/cinema/".($links[$i]) == $_SERVER['PHP_SELF'])
//    if($links[$i] == 'signup.php')
    {
        $links[$i].=$activeMark;
    }
}
$j=0;
?>
<header>
    
    <div class="bannerPlaceHolder">
    <div class="banner">
        <div class="bannerImagePlaceHolder">
            <img src="<?php echo $srcImage; ?>">
        </div>
        <div class="overlapper">
            <h1 class="masterH1"> <a href="<?php echo $links[0] ?>"> Cinema </a></h1>
        <br>
        
        <form method="get" action="films.php">
            <div class="searchBarSizer">
                <!--<input type="text" placeholder="type a film or a year to search here" name="search" value="" size="60px" autofocus="autofocus">-->
                <input type="text" placeholder="type a film or a year to search here" name="search" value="" size="60px">
                <!--<input type="hidden" name="isList" value="<?php // echo $isList; ?>">-->
                <input type="hidden" name="isList" value="<?php if(isset($isList) && !empty($isList)){echo $isList;}else{echo 0;} ?>">
                <!--<input type="hidden" name="isList" value="0">-->
            </div>
            <input type="submit" value="Search">
            <!--<br><br><br>-->
            
        </form>
        </div>
    </div>
    </div>
    
    <ul class="navbar">
        <li><a href="<?php echo $links[$j++] ?>"> Home </a></li>
        <li><a href="<?php echo $links[$j++] ?>" > Films </a></li>
        <li><a href="<?php echo $links[$j++] ?>" > Add Films </a></li>
        <?php 
        if($isLogged && isset($_SESSION['userID']))
        {?>
            <input type="checkbox" id="AccountCheckBox">
            <li class="nav-right dropDownLi">
                <label class="labelLI" for="AccountCheckBox"><?php echo $_SESSION['userID']?></label>
            </li>
            <li class="hiddable nav-right">
                    <a href="index.php?disconnect=1" > Sign Out </a>
            </li>
            <li class="hiddable nav-right">
                    <a href="index.php" > Settings </a>
            </li>
        <?php }
        else { $j++; ?>
            <li class="nav-right"><a href="<?php echo $links[$j++] ?>" > Sign In </a></li>
            <li class="nav-right"><a href="<?php echo $links[$j++] ?>" > Sign Up </a></li>
        <?php } ?>
    </ul>
</header>