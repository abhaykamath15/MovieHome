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
    <title>Parasite</title>
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
            background: rgba(0, 0, 0, 0.65) url('assets/images/Parasite ws.jpeg');
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
            <h1 class="movtitle">Parasite</h1>
            <div class="cm-img-box"></div>
            <form action="DramaDen.php" method="POST">
                <input class="bbutton" name="Parasite" value="Book tickets" type="submit">
            </form>            <button class="wtbutton"><a href="https://youtu.be/SEUXfv87Wpk">Watch Trailer</a></button>
            <div class="details">
                <h1>Age Rating: A</h1>
                <br>
                <br>
                <h1>Genre: Drama</h1>
                <br>
                <br>
                <h1>Language: KOR</h1>
            </div>
        </div>        
        <div class="desc">
            <h2>Directed by:	Bong Joon-ho</Joon-ho><br><br>
            Starring:		
            Song Kang-ho,
            Lee Sun-kyun,
            Cho Yeo-jeong<br><br>
            Distributed by:	CJ Entertainment<br><br>
            Release date:	
            May 21, 2019<br><br>
            Running time:	132 minutes<br><br>
            </h2>
            <br>
            <p><h2>Parasite is a 2019 South Korean black comedy drama film directed by Bong Joon-ho, who co-wrote the screenplay with Han Jin-won and co-produced the film. The film, starring Song Kang-ho, Lee Sun-kyun, Cho Yeo-jeong, Choi Woo-shik, Park So-dam, Jang Hye-jin, Park Myung-hoon, and Lee Jung-eun, follows a poor family who scheme to become employed by a wealthy family and infiltrate their household by posing as unrelated, highly qualified individuals.</h2></p>
        </div>
    </div>
</body>
</html>