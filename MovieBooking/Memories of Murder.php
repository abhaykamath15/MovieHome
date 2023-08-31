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
    <title>Memories of Murder</title>
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
            background: rgba(0, 0, 0, 0.65) url('assets/images/Memories of Murder ws.jpeg');
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
            <h1 class="movtitle">Memories of Murder</h1>
            <div class="cm-img-box"></div>
            <form action="CriminalCase.php" method="POST">
                <input class="bbutton" name="Memories_of_Murder" value="Book tickets" type="submit">
            </form>            <button class="wtbutton"><a href="https://youtu.be/0n_HQwQU8ls">Watch Trailer</a></button>
            <div class="details">
                <h1>Age Rating: A</h1>
                <br>
                <br>
                <h1>Genre: Crime</h1>
                <br>
                <br>
                <h1>Language: KOR</h1>
            </div>
        </div>        
        <div class="desc">
            <h2>Directed by:	Bong Joon-ho<br><br>
            Starring:		Song Kang-ho,
            Kim Sang-kyung,
            Kim Roi-ha<br><br>
            Distributed by:	CJ Entertainment<br><br>
            Release date:	
            May 2, 2003<br><br>
            Running time:	131 minutes<br><br>
            </h2>
            <br>
            <p><h2>Memories of Murder is a 2003 South Korean crime thriller film co-written and directed by Bong Joon-ho. It is loosely based on the true story of Korea's first confirmed serial murders, which took place between 1986 and 1991 in Hwaseong, Gyeonggi Province. Song Kang-ho and Kim Sang-kyung star as Detective Park and Detective Seo, respectively, two of the detectives trying to solve the crimes.</h2></p>
        </div>
    </div>
</body>
</html>