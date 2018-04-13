<?php
$con=mysql_connect('localhost','root','');
mysql_select_db('13ed');
$name=$_GET['name'];

$search=$_GET['search'];
if($search=="search")
{
$s="select * from three where name='$name'";
$name=mysql_query($s);
echo 
"<table border=1 cellpedding=5 cellspecing=5>
<tr>
<td>id</td>
<td>name</td>
<td>Email</td>
<td>Password</td>
</tr>
";
while($row=mysql_fetch_array($name))
{
echo"
<tr>
<td>$row[0]</td>
<td>$row[1]</td>
<td>$row[2]</td>
<td>$row[3]</td>
</tr>
";
}
echo"</table>";
}

?>