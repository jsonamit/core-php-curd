<?php
$con=mysql_connect('localhost','root','');
mysql_select_db('13ed');
//$submit=$_GET['submit'];
$name=$_GET['name'];
$email=$_GET['email'];
$pass=$_GET['pass'];
//if($submit=="submit")	
//{
$s="insert into three(name,email,pass)values('$name','$email','$pass')";
if(mysql_query($s))
echo "<h1>inserted successfully</h1>";
else
echo "<h1>inserted failed</h1>";	
//}


?>