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
    <title>Shoplifters</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <style>
        body{
            position: relative;
            background-color: #282828;
        }

        .content-box{
            background-color: #b33f62;
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
            background: rgba(0, 0, 0, 0.65) url('assets/images/Shoplifters ws.jpeg');
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
            <h1 class="movtitle">Shoplifters</h1>
            <div class="cm-img-box"></div>
            <form action="DramaDen.php" method="POST">
                <input class="bbutton" name="Shoplifters" value="Book tickets" type="submit">
            </form>
            <button class="wtbutton"><a href="https://youtu.be/9382rwoMiRc">Watch Trailer</a></button>
            <div class="details">
                <h1>Age Rating: U</h1>
                <br>
                <br>
                <h1>Genre: Drama</h1>
                <br>
                <br>
                <h1>Language: JAP</h1>
            </div>
        </div>        
        <div class="desc">
            <h2>Directed by:	Hirokazu Kore-eda<br><br>
            Starring:		
            Lily Franky,
            Sakura Ando,
            Mayu Matsuokar<br><br>
            Distributed by:	GAGA Pictures<br><br>
            Release date:	
            June 8, 2018<br><br>
            Running time:	109 minutes<br><br>
            </h2>
            <br>
            <p><h2>Shoplifters, is a 2018 Japanese drama film directed, written and edited by Hirokazu Kore-eda. Starring Lily Franky and Sakura Ando, it is about a family that relies on shoplifting to cope with a life of poverty.

                Kore-eda wrote the screenplay contemplating what makes a family, and inspired by reports on poverty and shoplifting in Japan. Principal photography began in mid-December 2017.[</h2></p>
        </div>
    </div>
</body>
</html>