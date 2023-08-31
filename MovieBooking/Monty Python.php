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
    <title>Monty Python</title>
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
            background: rgba(0, 0, 0, 0.65) url('assets/images/Monty Python ws.jpeg');
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
            <h1 class="movtitle">Monty Python and The Holy Grail</h1>
            <div class="cm-img-box"></div>
            <form action="KomedyKorner.php" method="POST">
                <input class="bbutton" name="Monty_Python" value="Book tickets" type="submit">
            </form>             <button class="wtbutton"><a href="https://youtu.be/urRkGvhXc8w">Watch Trailer</a></button>
            <div class="details">
                <h1>Age Rating: U</h1>
                <br>
                <br>
                <h1>Genre: Comedy</h1>
                <br>
                <br>
                <h1>Language: ENG</h1>
            </div>
        </div>        
        <div class="desc">
            <h2>Directed by:	Terry Gillam<br><br>
            Starring:		
            Graham Chapman,
            John Cleese,
            Terry Gilliam<br><br>
            Distributed by:	EMI Pictures<br><br>
            Release date:	
            April 3, 1975<br><br>
            Running time: 92 minutes<br><br>
            </h2>
            <br>
            <p><h2>Monty Python and the Holy Grail is a 1975 British comedy film satirizing the Arthurian legend, written and performed by the Monty Python comedy group (Graham Chapman, John Cleese, Terry Gilliam, Eric Idle, Terry Jones, and Michael Palin) and directed by Gilliam and Jones in their feature directorial debuts. It was conceived during the hiatus between the third and fourth series of their BBC Television series Monty Python's Flying Circus.</h2></p>
        </div>
    </div>
</body>
</html>