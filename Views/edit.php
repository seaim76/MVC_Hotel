
<?php
require_once('../Models/alldb.php');
$id = $_REQUEST['edit'];
$result = edit($id);
// print_r($result);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 30px;
            background-color: wheat;
            border-radius: 10px;
          
        }
        
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid black;
            border-radius: 4px;
        }
        
        button {
            background-color: red;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
        
        button:hover {
            background-color: green;
        }
    </style>
</head>
<body>
    <form action="../Controllers/addCheck.php" method="post">
        <?php while($row=$result->fetch_assoc()){ ?>
            Id: <input type="text" name="Id" value="<?php echo $row["Id"]; ?>"readonly><br>
            Name: <input type="text" name="name" value="<?php echo $row["Name"]; ?>"><br>
            Email: <input type="text" name="email" value="<?php echo $row["Email"]; ?>"readonly><br>
            Address: <input type="text" name="address" value="<?php echo $row["Address"]; ?>"><br>
            Phone Number: <input type="text" name="phone" value="<?php echo $row["phone"]; ?>"readonly><br>
            <button name="update" value="<?php echo $row["Id"]; ?>">Update</button>
        <?php } ?>
    </form>
</body>
</html>
