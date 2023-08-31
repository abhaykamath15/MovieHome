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
    <title>Tumbbad</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <style>
        body{
            position: relative;
            background-color: #282828;
        }

        .content-box{
            background-color: #086788;
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
            background: rgba(0, 0, 0, 0.65) url('assets/images/Tumbbad ws.jpeg');
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
            <h1 class="movtitle">Tumbbad</h1>
            <div class="cm-img-box"></div>
            <form action="HorrorHouse.php" method="POST">
                <input class="bbutton" name="Tumbbad" value="Book tickets" type="submit">
            </form>             <button class="wtbutton"><a href="https://youtu.be/ZjuhALyNgss">Watch Trailer</a></button>
            <div class="details">
                <h1>Age Rating: U</h1>
                <br>
                <br>
                <h1>Genre: Horror</h1>
                <br>
                <br>
                <h1>Language: HIN</h1>
            </div>
        </div>        
        <div class="desc">
            <h2>Directed by:	Rahi Anil Bavre<br><br>
            Starring:		Sohum Shah<br><br>
            Distributed by:	Eros International<br><br>
            Release date:	
            October 12, 2018<br><br>
            Running time:	104 minutes<br><br>
            </h2>
            <br>
            <p><h2>Tumbbad is a 2018 Indian/Swedish Hindi-language period horror film film directed by Rahi Anil Barve. Additionally, Anand Gandhi served as the creative director, and Adesh Prasad served as the co-director. Written by Mitesh Shah, Prasad, Barve, and Gandhi, the film was produced by Sohum Shah, Aanand L. Rai, Mukesh Shah and Amita Shah. Starring Sohum Shah in the lead role as Vinayak Rao, it follows the story of his search for a hidden treasure in the 20th century India village of Tumbbad, Maharashtra.</h2></p>
        </div>
    </div>
</body>
</html>