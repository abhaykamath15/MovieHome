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
    <title>3 Idiots</title>
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
            background: rgba(0, 0, 0, 0.65) url('assets/images/3 Idiots ws.jpeg');
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
            <h1 class="movtitle">3 Idiots</h1>
            <div class="cm-img-box"></div>
            <form action="DramaDen.php" method="POST">
                <input class="bbutton" name="3_Idiots" value="Book tickets" type="submit">
            </form>
            <button class="wtbutton"><a href="https://youtu.be/K0eDlFX9GMc">Watch Trailer</a></button>
            <div class="details">
                <h1>Age Rating: UA</h1>
                <br>
                <br>
                <h1>Genre: Drama</h1>
                <br>
                <br>
                <h1>Language: HIN</h1>
            </div>
        </div>        
        <div class="desc">
            <h2>Directed by:	Rajkumar Hirani<br><br>
            Starring:	Amir Khan, ,
            T. K. Carter<br><br>
            Distributed by:	Reliance BIG Pictures<br><br>
            Release date:	
            25 December 2009<br><br>
            Running time:	180 minutes<br><br>
            </h2>
            <br>
            <p><h2>3 Idiots is a 2009 Indian Hindi-language coming-of-age comedy-drama film written, edited and directed by Rajkumar Hirani, co-written by Abhijat Joshi and produced by Vidhu Vinod Chopra. Adapted loosely from Chetan Bhagat's novel Five Point Someone, the film stars Aamir Khan, R. Madhavan and Sharman Joshi in the titular roles, marking their reunion 3 years after Rang De Basanti (2006), while Kareena Kapoor, Boman Irani and Omi Vaidya star in pivotal roles. Narrated through parallel dramas, one in the present and the other ten years in the past, the story follows the friendship of three students at an Indian engineering college and is a satire about the social pressures under an Indian education system.</h2></p>
        </div>
    </div>
</body>
</html>