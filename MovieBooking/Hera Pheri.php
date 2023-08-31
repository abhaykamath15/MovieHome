<?php
    $servername ="localhost";
    $username="root";
    $password="";
    $dbname="MovieBooking";
    $conn=mysqli_connect($servername,$username,$password,$dbname);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hera Pheri</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <style>
        body{
            position: relative;
            background-color: #282828;
        }

        .content-box{
            background-color: #82bb12;
        }

        .movtitle{
            padding-left: 3rem;
            padding-top: 2rem;
        }

        .cm-img-box{
            width: 90vw;
            height: 50vh;
            margin: 2%;
            opacity: 0.8;
            border-radius: 1rem;
            position: relative;
            background: rgba(0, 0, 0, 0.65) url('assets/images/Hera Pheri ws.jpeg');
            background-blend-mode: darken;
            background-size: fill;
            background-position: center;
        }
    </style>
</head>
<body>
    <section class="top-bar">
        <div class="'left-content">
            <div id="logo"><img src="assets/images/logo.png" alt="" height="100rem"></div>
            <h1 class="title">CineHome</h1>
            <ul class="navigation">
                <li class="Horror button"><a href="index.php"><h2>Home</h2></a></li>
                <li class="Crime button"><a href="Movies.php"><h2>Movies</h2></a></li>
                <li class="Drama button"><a href="Languages.php"><h2>Languages</h2></a></li>
                <li class="Comedy button"><a href="Genres.php"><h2>Genres</h2></a></li>
            </ul>
        </div>
    </section>
    
    <br>
    <div class="content-box">
        <div class="top-content">
            <h1 class="movtitle">Hera Pheri</h1>
            <div class="cm-img-box"></div>
            <form action="KomedyKorner.php" method="POST">
                <input class="bbutton" name="Hera_Pheri" value="Book tickets" type="submit">
            </form>             <button class="wtbutton"><a href="https://youtu.be/m1zMmVwWr-M">Watch Trailer</a></button>
            <div class="details">
                <h1>Age Rating: U</h1>
                <br>
                <br>
                <h1>Genre: Comedy</h1>
                <br>
                <br>
                <h1>Language: HIN</h1>
            </div>
        </div>        
        <div class="desc">
            <h2>Directed by:	Priyadarshan<br><br>
            Starring:	Akshay Kumar, Suniel Shetty,
            Paresh Raval<br><br>
            Distributed by:	A G Films<br><br>
            Release date:	
            March 31, 2000<br><br>
            Running time:	138 minutes<br><br>
            </h2>
            <br>
            <p><h2>Hera Pheri is a 2000 Indian Hindi-language comedy film directed by Priyadarshan and written by Neeraj Vora, starring Akshay Kumar, Sunil Shetty, Paresh Rawal, Tabu, Om Puri and Gulshan Grover.The movie is a remake of 1989 Malayalam film Ramji Rao Speaking. It is the first instalment of the Hera Pheri franchise. The plot revolves around Two tenants, Raju and Shyam and a landlord Baburao, in desperate need of money, chance upon a ransom call via a cross connection. They hatch a plan to claim the ransom for themselves.</h2></p>
        </div>
    </div>
</body>
</html>