<html>
<body>
<center>
<form id="insert_data" action="13rth.php"method="get">
<table border="5" celspecing="7" cellpadding="5">
<h1>Connecting by Google</h1>
<tr>
<td>Name</td>
<td><input type="text" name="name"></td>
</tr>
<tr>
<td>Email id</td>
<td><input type="text" name="email"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="pass"></td>
</tr>
<tr>
<td><input type="submit" value="submit" name="submit"></td>
<td><input type="reset" value="Reset"></td>
</tr>
</table>
</form>
<form id="search" action="search.php" method="get">
<table><tr>
<td>Search</td>
<td><input type="text" name="name"></td>
</tr>
<tr>
<td><input type="submit" value="search" name="search">
</tr>
</table>
</form>
<form id="delete" action="delete1.php" method="get">
<table><tr>
<td>Delete</td>
<td><input type="text" placeholder="id" name="id"></td>
</tr>
<tr>
<td><input type="submit" value="delete" name="delete">
</tr>
</form>
<form id="" action="update1.php" method="get">
<table><tr>
<td>Update</td>
<td><input type="text" placeholder="User name" name="name"></td>
</tr>
<tr>
<td><input type="submit" value="Update" name="update">
</tr>
</form>
</center>
</body>
</html>