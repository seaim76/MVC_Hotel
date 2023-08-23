<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        
        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 15px;
        }
        
        nav {
            background-color: #444;
            padding: 10px;
            text-align: center;
        }
        
        nav a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
        }
        
        nav a:hover {
            background-color: #555;
        }
        
        section {
            padding: 20px;
        }
        
        .hotel-img {
            display: block;
            margin: 0 auto;
            max-width: 100%;
            height: auto;
        }
        
        .hotel-des {
            text-align: center;
        }
        
        .gallery {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        
        .gallery img {
            width: 200px;
            height: 200px;
            object-fit: cover;
        }
        
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
        }

        /* Custom styles */
        #home h2 {
            margin-bottom: 20px;
        }

        .img-w {
            position: relative;
        }

        .img-text {
            position: absolute;
            bottom: 10px;
            left: 0;
            right: 0;
            color: white;
            font-size: 18px;
            background-color: black;
            padding: 5px;
            text-align: center;
        }
        
        h1,h2 {
            text-align: center;
            color: green;
        }

        #Check {
            text-align: center;
            padding: 20px;
        }
        
        #Check table {
            margin: 0 auto;
        }

        #Check th, #Check td {
            padding: 10px;
            border: 1px solid black;
        }

        #Check th {
            background-color: gray;
            color: white;
        }

        #Check input[type="text"], #Check input[type="date"], #Check select {
            padding: 8px;
            width: 100%;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        #Check input[type="submit"] {
            margin-top: 10px;
            padding: 10px;
            background-color: red;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        #Check input[type="submit"]:hover {
            background-color: green;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Our Hotel</h1>
    </header>

    <nav>
        <a href="abd.php">Home</a>
        <a href="#">Regestration</a>
        <a href="./Controllers/login.php">Manager</a>
    </nav>

    <section id="home">
        <h2>Explore Our Hotel</h2>
       
            
        <div class="img-w">
            <img src="./img/1.jpg" class="hotel-img" />
            <div class="img-text">Hotel-1</div>
        </div>
                
       
        <div class="hotel-des">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla condimentum est ac eros sollicitudin
                consectetur. Sed in ultricies nisi, eget venenatis libero. Integer ut felis justo. Etiam eu dictum
                nibh, vitae bibendum mauris. Nullam tristique eget purus sit amet volutpat. Phasellus vitae ipsum non
                ante fringilla posuere.</p>
        </div>
    </section>
    <section id="Check">
        <h2>Book Now</h2>
        
    </section>
    <section id="rooms">
        <h2>Our Rooms</h2>
   
        <div class="gallery">
            <img src="./img/Room/1.jpg" alt="">
            <img src="./img/Room/2.jpg" alt="">
            <img src="./img/Room/3.jpg" alt="">
            <img src="./img/Room/4.jpg" alt="">
        </div>
    </section>

    <footer>
        <p>&copy; 2023 Hotel. All rights reserved Webtech_University.</p>
    </footer>
</body>
</html>
