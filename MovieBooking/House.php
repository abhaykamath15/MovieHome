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
    <title>House</title>
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
            background: rgba(0, 0, 0, 0.65) url('assets/images/House ws.jpg');
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
            <h1 class="movtitle">House</h1>
            <div class="cm-img-box"></div>
            <form action="KomedyKorner.php" method="POST">
                <input class="bbutton" name="House" value="Book tickets" type="submit">
            </form>             <button class="wtbutton"><a href="https://youtu.be/WQ_Yo06kIIA">Watch Trailer</a></button>
            <div class="details">
                <h1>Age Rating: A</h1>
                <br>
                <br>
                <h1>Genre: Comedy</h1>
                <br>
                <br>
                <h1>Language: JAP</h1>
            </div>
        </div>        
        <div class="desc">
            <h2>Directed by:	Nobuhiko Obayashi<br><br>
            Starring:		
            Kimiko Ikegami,
            Miki Jinbo,
            Ai Matubara<br><br>
            Distributed by:	Toho<br><br>
            Release date:	
            July 30, 1977<br><br>
            Running time:	109 minutes<br><br>
            </h2>
            <br>
            <p><h2>A schoolgirl takes her six classmates to her aunt's country house. There, they come face-to-face with evil spirits, a house cat and a haunted piano.</h2></p>
        </div>
    </div>
</body>
</html>