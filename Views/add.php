<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Customer</title>
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
        h1 {
            font-size: 40px;
            font-weight: 800;
            margin: 10px 50px;
        }
        .container {
            background-color: wheat;
            padding: 200px;
            border-radius: 5px;
            text-align: center; /* Center the content horizontally */
        }
        .container input {
            width: 100%;
            padding: 10px 10px;
            margin-bottom: 15px;
            border: 1px solid black;
            border-radius: 3px;
        }
        input[type="submit"] {
            background-color: red;
            color: white;
            padding: 10px 90px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: green;
        }
    </style>
</head>
<body>
    <h1>Add Customer Details</h1>
    <div class="container">
        <form method="post" action="../Controllers/addCheck.php">
            <input type="number" name="id" id="id" placeholder="Room ID"><br>
            <input type="text" name="name" id="name" placeholder="Name"><br>
            <input type="text" name="email" id="email" placeholder="Email"><br>
            <input type="password" name="pass" id="pass" placeholder="Password"><br>
            <input type="text" name="address" id="address" placeholder="Address"><br>
            <input type="text" name="phone" id="phone" placeholder="Phone Number"><br>
            <input type="submit" name="add">
        </form>
    </div>
</body>
</html>
