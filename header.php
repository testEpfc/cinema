<?php 
$links = array('index.php','signin.php','signup.php','films.php');
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
    <ul class="navbar">
        <li><a href="<?php echo $links[$j++] ?>"> Menu </a></li>
        <li><a href="<?php echo $links[$j++] ?>" > Connect </a></li>
        <li><a href="<?php echo $links[$j++] ?>" > Nouveau Compte </a></li>
        <li><a href="<?php echo $links[$j++] ?>" > Films </a></li>
        <li class="nav-right"><a href=""> Search </a></li>
    </ul>
    <!--<hr>-->
</header>