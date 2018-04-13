<?php
include 'connection.php';
//include 'delete.php';
$id=$_GET['id'];

$sql = "SELECT * FROM registration WHERE id=$id";

$query = mysqli_query($conn, $sql);

if (!$query) {
    die ('SQL Error: ' . mysqli_error($conn));
}
?>
<html>
<head>
    <title>Update user</title>
    <link rel="stylesheet" href="../css/bootstrap.css" />

</head>
<body>
<h1>Update Users</h1>
<table class="data-table">
    <caption class="title"></caption>

    <?php

    if ($query->num_rows > 0) {
        $row = $query->fetch_assoc();
        echo '<div class="container">
                 <div class="row">
                         <div class="col-md-4">
                     <form action="delete.php" method="get">
                         <div class="form-group">
                           <label for="name">Name</label>
					       <input type="text" class="form-control" name="name" id="name" value="' . $row['name'] . '">
					    </div>
					 <div class="form-group">
					   <label for="name">Address</label>
					   <input type="text" class="form-control" name="address" id="address" value="' . $row['address'] . '">
					 </div>
					 <div class="form-group">
					   <label for="name">Email</label>
					   <input type="text" class="form-control" name="email" id="email" value="' . $row['email'] . '">
					</div>
					 <div class="form-group">
					   <label for="name">City</label>
					   <input type="text" class="form-control" name="city" id="city" value="' . $row['city'] . '">
					</div>
					 <button type="submit"  class="btn btn-block btn-success">Update</button>
                 </form>
                 </div>
                   </div>
			</div>';
    } else {
        echo "0 results";
    }

    //update();
    ?>
    </tbody>
</table>

</body>
</html>