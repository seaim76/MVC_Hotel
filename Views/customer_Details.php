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

		table {
			border-collapse: collapse;
			width: 80%;
			margin: 20px auto;
			background-color: #fff;
			border: 1px solid #ccc;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
		}

		th, td {
			padding: 10px;
			text-align: center;
		}

		th {
			background-color: #007BFF;
			color: #fff;
		}

		tr:nth-child(even) {
			background-color: #f2f2f2;
		}

		button {
			background-color: #d9534f;
			color: #fff;
			border: none;
			padding: 5px 10px;
			cursor: pointer;
			border-radius: 3px;
		}

		button:hover {
			background-color: #c9302c;
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
