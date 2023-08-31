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
    <title>The Shining</title>
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
            background: rgba(0, 0, 0, 0.65) url('assets/images/The Shining ws.jpeg');
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
            <h1 class="movtitle">The Shining</h1>
            <div class="cm-img-box"></div>
            <form action="HorrorHouse.php" method="POST">
                <input class="bbutton" name="The_Shining" value="Book tickets" type="submit">
            </form>            <button class="wtbutton"><a href="https://youtu.be/S014oGZiSdI">Watch Trailer</a></button>
            <div class="details">
                <h1>Age Rating: A</h1>
                <br>
                <br>
                <h1>Genre: Horror</h1>
                <br>
                <br>
                <h1>Language: ENG</h1>
            </div>
        </div>        
        <div class="desc">
            <h2>Directed by:	Stanley Kubrick<br><br>
            Starring:		
            Jack Nicholson,
            Shelley Duvall,
            Scatman Crothers<br><br>
            Distributed by:	Warner Bros.<br><br>
            Release date:	
            May 23, 1980<br><br>
            Running time:	146 minutes<br><br>
            </h2>
            <br>
            <p><h2>The Shining is a 1980 psychological horror film produced and directed by Stanley Kubrick and co-written with novelist Diane Johnson. The film is based on Stephen King's 1977 novel of the same name and stars Jack Nicholson, Shelley Duvall, Scatman Crothers, and Danny Lloyd. The film's central character is Jack Torrance (Nicholson), an aspiring writer and recovering alcoholic who accepts a position as the off-season caretaker of the isolated historic Overlook Hotel in the Colorado Rockies, with his wife, Wendy Torrance (Duvall), and young son, Danny Torrance (Lloyd). Danny is gifted with psychic abilities named "shining". After a winter storm leaves the Torrances snowbound, Jack's sanity deteriorates due to the influence of the supernatural forces that inhabit the hotel.</h2></p>
        </div>
    </div>
</body>
</html>