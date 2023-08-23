
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task</title>
    <style>
        body {
            font-family:Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
            background-color: wheat;
            
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            font-weight: 800;
       
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 85vh;
        }

        .button-main button {
            width: 200px; 
          
            color: white;
            border: 2px solid black;
            padding: 10px;
            border-radius: 10px;
            cursor: pointer;
            font-weight: bold;
            margin-bottom: 15px;
        }


        .button-main button:hover {
            background-color: green;
        }


        .imgd img {
            max-width: 100%;
            height: auto;
            margin-left: 200px;
        }
       .b1 a{
        text-decoration: none;
        font-size: 30px;
        font-weight: 800;
       }
       .b2 a{
        text-decoration: none;
        font-size: 30px; 
        font-weight: 800;  
    }
       .b3 a{
        text-decoration: none;
        font-size: 30px;
        font-weight: 800;
       }
       .b4 a{
        text-decoration: none;
        font-size: 30px;
        font-weight: 800;
       }
       .b5 a{
        text-decoration: none;
        font-size: 30px; 
        font-weight: 800;  
    }
       .b6 a{
        text-decoration: none;
        font-size: 30px; 
        font-weight: 800;  
    }
       .b7 a{
        font-size: 30px;
        text-decoration: none;
        font-weight: 800;
       }
    </style>
</head>
<body>
    <h1>Welcome To The Admin Panel</h1>
    <div class="container">
        <div class="button-main">
            <div class="b1"><button><a href="../abd.php">Home</a></button></div>
            <div class="b2"><button><a href="#">Customer Profile</a></button></div>
            <div class="b3"><button><a href="../Views/add.php">Add Customer</a></button></div>
            <div class="b4"><button><a href="../Controllers/customer_List.php">Customer list</a></button></div>
            <div class="b5"><button><a href="../Views/customer_Details.php">Delete Customer</a></button></div>
            <div class="b7"><button><a href="../abd.php">Logout</a></button></div>
        </div>
        <div class="imgd">
            <img src="../img/H.png" alt="hotel">
        </div>
    </div>
</body>
</html>
