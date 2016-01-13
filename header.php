<?php 
$srcImage = "ressources/1.jpg ";
$links = array('index.php','signin.php','signup.php','films.php','form.php');
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
    
    <div class="banner">
        <img src="<?php echo $srcImage; ?>">
        <div class="overlapper">
        <h1 class="masterH1"> Cinema </h1>
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
    
    <ul class="navbar">
        <li><a href="<?php echo $links[$j++] ?>"> Menu </a></li>
        <li class="nav-right"><a href="<?php echo $links[$j++] ?>" > Sign In </a></li>
        <li class="nav-right"><a href="<?php echo $links[$j++] ?>" > Sign Up </a></li>
        <li><a href="<?php echo $links[$j++] ?>" > Films </a></li>
        <li><a href="<?php echo $links[$j++] ?>" > Add Films </a></li>
        <!--<li class="nav-right"><a href=""> Search </a></li>-->
        <li><a href=""> Search </a></li>
    </ul>
</header>