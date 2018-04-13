<?php
$day=date("g:i:s a -D/M/Y");

setcookie("mycookie",$day,time()+24*60*60);
if(isset($_COOKIE['mycookie']))
{
	$last=$_COOKIE['mycookie'];
	echo "our last visit is on $last";
}
else
{
	echo "this is my first visit";
}
?>
