<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View</title>
  <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: white;
            padding: 50px;
            border-radius: 5px;
            text-align: center;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: red;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            font-weight: bold;
        }

        input[type="submit"]:hover {
            background-color: green;
        }
        img{
          width: 200px;
          height: 200px;
          margin-right: 50PX;
        }
    </style>
</head>
<body>
  <img src="../img/R.png" alt="">
	<form method="post" action="../Controllers/loginCheck.php">
      Email:<input type="text" name="email"><br>
      Password:<input type="text" name="pass"><br>
      <input type="submit" name="submit">
    </form>
</body>
</html>