<?php
require_once('../Models/alldb.php');
$result=customer_Details();
 ?>
 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Customer Details</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
			margin: 0;
			padding: 0;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}
		h1{
			padding: 20px 80px;
			font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
			font-weight: 800;
		}

		table {
			border-collapse: collapse;
			width: 80%;
			margin: 20px auto;
			background-color: wheat;
			border: 1px solid #ccc;
			border-radius: 5px;
			
		}

		th, td {
			padding: 10px;
			text-align: center;
		}

		th {
			background-color: blueviolet;
			color: black;
		}

		/* tr:nth-child(even) {
			background-color: gray;
		} */

		button {
			background-color: red;
			color: white;
			border: none;
			padding: 5px 10px;
			cursor: pointer;
			border-radius: 3px;
		}

		button:hover {
			background-color: green;
		}
	</style>
</head>
<body>
	<h1>Customer Details</h1>
	<form method="get" action="../Controllers/addcheck.php">
		<table border="1">
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Email</th>
				<th>Address</th>
				<th>Mobile</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			<?php while($row = $result->fetch_assoc()){ ?>
				<tr>
					<td><?php echo $row["Id"]; ?></td>
					<td><?php echo $row["Name"]; ?></td>
					<td><?php echo $row["Email"]; ?></td>
					<td><?php echo $row["Address"]; ?></td>
					<td><?php echo $row["phone"]; ?></td>
					<td><button name="edit" value="<?php echo $row["Id"]; ?>">Edit</button></td>
					<td><button name="delete" value="<?php echo $row["Id"]; ?>">Delete</button></td>
				</tr>
			<?php } ?>
		</table>
	</form>
</body>
</html>
