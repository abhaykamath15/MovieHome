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
    <title>Goodfellas</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <style>
        body{
            position: relative;
            background-color: #282828;
        }

        .content-box{
            background-color: #f46036;
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
            background: rgba(0, 0, 0, 0.65) url('assets/images/Goodfellas ws.jpeg');
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
            <h1 class="movtitle">Goodfellas</h1>
            <div class="cm-img-box"></div>
            <form action="CriminalCase.php" method="POST">
                <input class="bbutton" name="Goodfellas" value="Book tickets" type="submit">
            </form>            <button class="wtbutton"><a href="https://youtu.be/2ilzidi_J8Q">Watch Trailer</a></button>
            <div class="details">
                <h1>Age Rating: A</h1>
                <br>
                <br>
                <h1>Genre: Crime</h1>
                <br>
                <br>
                <h1>Language: ENG</h1>
            </div>
        </div>        
        <div class="desc">
            <h2>Directed by:	Martin Scorsese<br><br>
            Starring:	Robert De Niro, Ray Liotta,
            Joe Pesci<br><br>
            Distributed by:	Warner Bros.<br><br>
            Release date:	
            September 19, 1990<br><br>
            Running time:	145 minutes<br><br>
            </h2>
            <br>
            <p><h2>Goodfellas (stylized GoodFellas) is a 1990 American epic biographical crime film directed by Martin Scorsese, written by Nicholas Pileggi and Scorsese, and produced by Irwin Winkler. It is a film adaptation of the 1985 nonfiction book Wiseguy by Pileggi. Starring Robert De Niro, Ray Liotta, Joe Pesci, Lorraine Bracco and Paul Sorvino, the film narrates the rise and fall of mob associate Henry Hill and his friends and family from 1955 to 1980.</h2></p>
        </div>
    </div>
</body>
</html>