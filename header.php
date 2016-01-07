<?php 
$links = array('index.php','signin.php','signup.php','filmsImage.php');
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
        <li><a href="<?php echo $links[$j++] ?>"> menu </a></li>
        <li><a href="<?php echo $links[$j++] ?>" > connect </a></li>
        <li><a href="<?php echo $links[$j++] ?>" > nouveau compte </a></li>
        <li><a href="<?php echo $links[$j++] ?>" > films </a></li>
    </ul>
    <hr>
</header>