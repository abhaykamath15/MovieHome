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
    <title>The Thing</title>
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
            background: rgba(0, 0, 0, 0.65) url('assets/images/The Thing ws.jpeg');
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
            <h1 class="movtitle">The Thing</h1>
            <div class="cm-img-box"></div>
            <form action="HorrorHouse.php" method="POST">
                <input class="bbutton" name="The_Thing" value="Book tickets" type="submit">
            </form>             <button class="wtbutton"><a href="https://youtu.be/5ftmr17M-a4">Watch Trailer</a></button>
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
            <h2>Directed by:	John Carpenter<br><br>
            Starring:	Kurt Russell, Wilford Brimley,
            T. K. Carter<br><br>
            Distributed by:	Universal Pictures<br><br>
            Release date:	
            June 25, 1982<br><br>
            Running time:	109 minutes<br><br>
            </h2>
            <br>
            <p><h2>The Thing is a 1982 American science fiction horror film directed by John Carpenter from a screenplay by Bill Lancaster. Based on the 1938 John W. Campbell Jr. novella Who Goes There?, it tells the story of a group of American researchers in Antarctica who encounter the eponymous "Thing", a parasitic extraterrestrial life-form that assimilates, then imitates, other organisms. The group is overcome by paranoia and conflict as they learn that they can no longer trust each other and that any of them could be the Thing. The film stars Kurt Russell as the team's helicopter pilot R.J. MacReady, with A. Wilford Brimley, T. K. Carter, David Clennon, Keith David, Richard Dysart, Charles Hallahan, Peter Maloney, Richard Masur, Donald Moffat, Joel Polis, and Thomas G. Waites in supporting roles.</h2></p>
        </div>
    </div>
</body>
</html>