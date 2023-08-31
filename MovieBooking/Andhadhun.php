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
    <title>Andhadhun</title>
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
            background: rgba(0, 0, 0, 0.65) url('assets/images/Andhadhun ws.jpeg');
            background-blend-mode: darken;
            background-position: 10vh;
            background-size:fill;
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
            <h1 class="movtitle">Andhadhun</h1>
            <div class="cm-img-box"></div>
            <form action="CriminalCase.php" method="POST">
                <input class="bbutton" name="Andhadhun" value="Book tickets" type="submit">
            </form>            <button class="wtbutton"><a href="https://youtu.be/2iVYI99VGaw">Watch Trailer</a></button>
            <div class="details">
                <h1>Age Rating: UA</h1>
                <br>
                <br>
                <h1>Genre: Crime</h1>
                <br>
                <br>
                <h1>Language: HIN</h1>
            </div>
        </div>        
        <div class="desc">
            <h2>Directed by:	Sriram Raghavan<br><br>
            Starring:	Tabu,
            Ayushmann Khurrana,
            Radhika Apte<br><br>
            Distributed by:	Viacom 18 Motion Pictures<br><br>
            Release date:	
            October 5, 2018<br><br>
            Running time:	139 minutes<br><br>
            </h2>
            <br>
            <p><h2>Andhadhun is a 2018 Indian Hindi-language black comedy crime thriller film co-written and directed by Sriram Raghavan. It stars Tabu, Ayushmann Khurrana, Radhika Apte and Anil Dhawan. The film tells the story of a blind piano player who unwittingly becomes embroiled in the murder of a retired actor.</h2></p>
        </div>
    </div>
</body>
</html>