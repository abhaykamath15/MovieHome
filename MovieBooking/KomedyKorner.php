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
    <title>Komedy Korner</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <style>        
            *{
            box-sizing: border-box;
            }

            body{
            background-color :#282828;
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            }

            .movie-container{
            margin: 50px 0;
            }

            .movie-container select{
            background-color: #fff;
            border: 0;
            border-radius: 5px;
            font-size: 20px;
            margin-left: 20px;
            padding: 5px 15px 5px 15px;
            -moz-appearance: none;
            -webkit-appearance: none;
            appearance: none;
            }

            .container{
            perspective: 1500px;
            margin-bottom: 30px;
            padding: 20px;
            border-radius: 2rem;
            background-color: #82bb12;
            }

            .seat{
            background-color: lightgrey;
            height:80px;
            width: 70px;
            margin: 20px;
            border-top-left-radius: 30px;
            border-top-right-radius: 30px;
            }

            .seat.selected{
            background-color: #dc0c2b;
            }

            .seat:nth-of-type(2){
            margin-right: 18px;
            }

            .seat:nth-last-of-type(2){
            margin-left: 18px;
            }

            .seat:not(.occupied):hover{
            cursor: pointer;
            transform: scale(1.2);
            }

            .showcase .seat:not(.occupied):hover{
            cursor: default;
            transform: scale(1);
            }

            .showcase{
            background: rgba(0,0,0,0.1);
            padding: 5px 10px;
            border-radius: 5px;
            color:#777;
            list-style: none;
            display: flex;
            justify-content: space-between;
            }

            .showcase li{
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 10px;
            }

            .showcase li small{
            margin-left: 2px;
            }

            .row{
            display: flex;
            }

            .screen{
            background-color: #fff;
            height: 70px;
            width: 100%;
            margin: 15px 0;
            transform: rotateX(-45deg);
            box-shadow: 0 3px 10px rgba(255,255,255,0.7);
            }

            p.text{
            margin: 5px 0;
            }

            p.text span{
            color: #6feaf6;
    
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
    <?php
        if (isset($_POST["City_Lights"])) {
            $mov="City Lights";
            $sql = "INSERT INTO Ticket(Name,Email,Phone,Title) VALUES (NULL, NULL, NULL, '$mov')";
            $result = mysqli_query($conn,$sql);
        }
        elseif (isset($_POST["Hera_Pheri"])) {
            $mov="Hera Pheri";
            $sql = "INSERT INTO Ticket(Name,Email,Phone,Title) VALUES (NULL, NULL, NULL, '$mov')";
            $result = mysqli_query($conn,$sql);
        }
        elseif (isset($_POST["Monty_Python"])) {
            $mov="Monty Python";
            $sql = "INSERT INTO Ticket(Name,Email,Phone,Title) VALUES (NULL, NULL, NULL, '$mov')";
            $result = mysqli_query($conn,$sql);
        }
        elseif (isset($_POST["House"])) {
            $mov="House";
            $sql = "INSERT INTO Ticket(Name,Email,Phone,Title) VALUES (NULL, NULL, NULL, '$mov')";
            $result = mysqli_query($conn,$sql);
        };
        
    ?>
    <br>
            <body>
                <br><h1>Komedy Korner</h1>
                <div class="movie-container" hidden>
                    <label>
                        Select Movie:
                    </label>
                    <select id="movie">
                        <option value="400"></option>
                    </select>
                </div>

                <div class="container">
                    <div class="screen"></div>
                    <form action="CustDetail.php" method="POST">
                    <div class="row">
                        <input class="seat" name="seats[]" value="KKF1"  type="checkbox">
                        <input class="seat" name="seats[]" value="KKF2"  type="checkbox">
                        <input class="seat" name="seats[]" value="KKF3"  type="checkbox">
                    </div>
                    <div class="row">
                        <input class="seat" name="seats[]" value="KKM1"  type="checkbox">
                        <input class="seat" name="seats[]" value="KKM2"  type="checkbox">
                        <input class="seat" name="seats[]" value="KKM3"  type="checkbox">
                    </div>
                    <div class="row">
                        <input class="seat" name="seats[]" value="KKB1"  type="checkbox">
                        <input class="seat" name="seats[]" value="KKB2"  type="checkbox">
                        <input class="seat" name="seats[]" value="KKB3"  type="checkbox">
                    </div>
                </div>
                <p class="text">Each Ticket Costs Rs.400<span id="total"></span></p>
                <input class="sbutton" name="Details" value="Enter Details" type="submit">
                </form>
</body>        