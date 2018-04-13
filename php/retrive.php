<?php
include 'connection.php';

$sql = 'SELECT * FROM registration';

$query = mysqli_query($conn, $sql);

if (!$query) {
    die ('SQL Error: ' . mysqli_error($conn));
}
?>
<html>
<head>
    <title>Displaying MySQL Data in HTML Table</title>
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <style type="text/css">
        body {
            font-size: 15px;
            color: #343d44;
            font-family: "segoe-ui", "open-sans", tahoma, arial;
            padding: 0;
            margin: 0;
        }

        table {
            margin: auto;
            font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
            font-size: 12px;
        }

        h1 {
            margin: 25px auto 0;
            text-align: center;
            text-transform: uppercase;
            font-size: 17px;
        }

        table td {
            transition: all .5s;
        }

        /* Table */
        .data-table {
            border-collapse: collapse;
            font-size: 14px;
            min-width: 537px;
        }

        .data-table th,
        .data-table td {
            border: 1px solid #e1edff;
            padding: 7px 17px;
        }

        .data-table caption {
            margin: 7px;
        }

        /* Table Header */
        .data-table thead th {
            background-color: #508abb;
            color: #FFFFFF;
            border-color: #6ea1cc !important;
            text-transform: uppercase;
        }

        /* Table Body */
        .data-table tbody td {
            color: #353535;
        }

        .data-table tbody td:first-child,
        .data-table tbody td:nth-child(4),
        .data-table tbody td:last-child {
            text-align: right;
        }

        .data-table tbody tr:nth-child(odd) td {
            background-color: #f4fbff;
        }

        .data-table tbody tr:hover td {
            background-color: #ffffa2;
            border-color: #ffff0f;
        }

        /* Table Footer */
        .data-table tfoot th {
            background-color: #e5f5ff;
            text-align: right;
        }

        .data-table tfoot th:first-child {
            text-align: left;
        }

        .data-table tbody td:empty {
            background-color: #ffcccc;
        }
    </style>
</head>
<body>
<h1>Users Table</h1>
<table class="data-table">
    <caption class="title"></caption>
    <thead>
    <tr>
        <th>NO</th>
        <th>Name</th>
        <th>Address</th>
        <th>Email</th>
        <th>City</th>
        <th>Delete</th>
        <th>Update</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $no = 1;

    while ($row = mysqli_fetch_array($query)) {
        $id = $row['id'];
        echo '<tr>
					<td>' . $no . '</td>
					<td>' . $row['name'] . '</td>
					<td>' . $row['address'] . '</td>
					<td>' . $row['email'] . '</td>
					<td>' . $row['city'] . '</td>
							
					<td><a href="delete.php?id='.$row['id'].'"><button type="button" class="btn btn-primary" >Delete</button></a></td>	
					<td><a href="update.php?id='.$row['id'].'"><button type="button" class="btn btn-primary" >Update</button></a></td>	
				
									
				</tr>';
        $no++;
    }


    ?>
    </tbody>
</table>

</body>
</html>