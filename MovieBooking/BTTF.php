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
    <title>Back To The Future</title>
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
            background: rgba(0, 0, 0, 0.65) url('assets/images/BTTF ws.jpeg');
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
            <h1 class="movtitle">Back To The Future</h1>
            <div class="cm-img-box"></div>
            <form action="DramaDen.php" method="POST">
                <input class="bbutton" name="BTTF" value="Book tickets" type="submit">
            </form>            <button class="wtbutton"><a href="https://youtu.be/qvsgGtivCgs">Watch Trailer</a></button>
            <div class="details">
                <h1>Age Rating: U</h1>
                <br>
                <br>
                <h1>Genre: Drama</h1>
                <br>
                <br>
                <h1>Language: ENG</h1>
            </div>
        </div>        
        <div class="desc">
            <h2>Directed by:	Robert Zemeckis<br><br>
            Starring:	 Michael J. Fox, Christopher Lloyd, Lea Thompson<br><br>
            Distribution:<br>Amblin Entertainment<br>
            Release date:	
            July 3, 1985<br><br>
            Running time:	116 minutes<br><br>
            </h2>
            <br>
            <p><h2>Back to the Future is a 1985 American science fiction film directed by Robert Zemeckis, and written by Zemeckis and Bob Gale. It stars Michael J. Fox, Christopher Lloyd, Lea Thompson, Crispin Glover, and Thomas F. Wilson. Set in 1985, the story follows Marty McFly, a teenager accidentally sent back to 1955 in a time-traveling DeLorean automobile built by his eccentric scientist friend Emmett "Doc" Brown. While in the past, Marty inadvertently prevents his future parents from falling in love—threatening his existence—and is forced to reconcile the pair and somehow get back to the future.</h2></p>
        </div>
    </div>
</body>
</html>