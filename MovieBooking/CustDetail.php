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
    <title>Customer Details</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    
</head>
<body style="position: relative;">
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
        $sql3="UPDATE Auditorium SET Selected=0 WHERE 1";
        $result=mysqli_query($conn,$sql3);
        $sql4="DELETE FROM `Ticket_Seat` WHERE TicketID=(SELECT TicketID FROM Ticket ORDER BY TicketID DESC LIMIT 1)";
        $result=mysqli_query($conn,$sql4);
        if (isset($_POST["Details"])) {
            $seats=$_POST['seats'];
            foreach ($seats as $key => $value) {
                if ($value=="DDF1") {
                    $sql = "UPDATE Auditorium SET Selected='1' WHERE Row_no='F' AND Col_no='1' AND Aud_id='DD'";
                    $result = mysqli_query($conn,$sql);
                };
                if ($value=="DDF2") {
                    $sql = "UPDATE Auditorium SET Selected='1' WHERE Row_no='F' AND Col_no='2' AND Aud_id='DD'";
                    $result = mysqli_query($conn,$sql);
                };
                if ($value=="DDF3") {
                    $sql = "UPDATE Auditorium SET Selected='1' WHERE Row_no='F' AND Col_no='3' AND Aud_id='DD'";
                    $result = mysqli_query($conn,$sql);
                };
                if ($value=="DDM1") {
                    $sql = "UPDATE Auditorium SET Selected='1' WHERE Row_no='M' AND Col_no='1' AND Aud_id='DD'";
                    $result = mysqli_query($conn,$sql);
                };
                if ($value=="DDM2") {
                    $sql = "UPDATE Auditorium SET Selected='1' WHERE Row_no='M' AND Col_no='2' AND Aud_id='DD'";
                    $result = mysqli_query($conn,$sql);
                };
                if ($value=="DDM3") {
                    $sql = "UPDATE Auditorium SET Selected='1' WHERE Row_no='M' AND Col_no='3' AND Aud_id='DD'";
                    $result = mysqli_query($conn,$sql);
                };
                if ($value=="DDB1") {
                    $sql = "UPDATE Auditorium SET Selected='1' WHERE Row_no='B' AND Col_no='1' AND Aud_id='DD'";
                    $result = mysqli_query($conn,$sql);
                };
                if ($value=="DDB2") {
                    $sql = "UPDATE Auditorium SET Selected='1' WHERE Row_no='B' AND Col_no='2' AND Aud_id='DD'";
                    $result = mysqli_query($conn,$sql);
                };
                if ($value=="DDB3") {
                    $sql = "UPDATE Auditorium SET Selected='1' WHERE Row_no='B' AND Col_no='3' AND Aud_id='DD'";
                    $result = mysqli_query($conn,$sql);
                };
                if ($value=="CCF1") {
                    $sql = "UPDATE Auditorium SET Selected='1' WHERE Row_no='F' AND Col_no='1' AND Aud_id='CC'";
                    $result = mysqli_query($conn,$sql);
                };
                if ($value=="CCF2") {
                    $sql = "UPDATE Auditorium SET Selected='1' WHERE Row_no='F' AND Col_no='2' AND Aud_id='CC'";
                    $result = mysqli_query($conn,$sql);
                };
                if ($value=="CCF3") {
                    $sql = "UPDATE Auditorium SET Selected='1' WHERE Row_no='F' AND Col_no='3' AND Aud_id='CC'";
                    $result = mysqli_query($conn,$sql);
                };
                if ($value=="CCM1") {
                    $sql = "UPDATE Auditorium SET Selected='1' WHERE Row_no='M' AND Col_no='1' AND Aud_id='CC'";
                    $result = mysqli_query($conn,$sql);
                };
                if ($value=="CCM2") {
                    $sql = "UPDATE Auditorium SET Selected='1' WHERE Row_no='M' AND Col_no='2' AND Aud_id='CC'";
                    $result = mysqli_query($conn,$sql);
                };
                if ($value=="CCM3") {
                    $sql = "UPDATE Auditorium SET Selected='1' WHERE Row_no='M' AND Col_no='3' AND Aud_id='CC'";
                    $result = mysqli_query($conn,$sql);
                };
                if ($value=="CCB1") {
                    $sql = "UPDATE Auditorium SET Selected='1' WHERE Row_no='B' AND Col_no='1' AND Aud_id='CC'";
                    $result = mysqli_query($conn,$sql);
                };
                if ($value=="CCB2") {
                    $sql = "UPDATE Auditorium SET Selected='1' WHERE Row_no='B' AND Col_no='2' AND Aud_id='CC'";
                    $result = mysqli_query($conn,$sql);
                };
                if ($value=="CCB3") {
                    $sql = "UPDATE Auditorium SET Selected='1' WHERE Row_no='B' AND Col_no='3' AND Aud_id='CC'";
                    $result = mysqli_query($conn,$sql);
                };
                if ($value=="HHF1") {
                    $sql = "UPDATE Auditorium SET Selected='1' WHERE Row_no='F' AND Col_no='1' AND Aud_id='HH'";
                    $result = mysqli_query($conn,$sql);
                };
                if ($value=="HHF2") {
                    $sql = "UPDATE Auditorium SET Selected='1' WHERE Row_no='F' AND Col_no='2' AND Aud_id='HH'";
                    $result = mysqli_query($conn,$sql);
                };
                if ($value=="HHF3") {
                    $sql = "UPDATE Auditorium SET Selected='1' WHERE Row_no='F' AND Col_no='3' AND Aud_id='HH'";
                    $result = mysqli_query($conn,$sql);
                };
                if ($value=="HHM1") {
                    $sql = "UPDATE Auditorium SET Selected='1' WHERE Row_no='M' AND Col_no='1' AND Aud_id='HH'";
                    $result = mysqli_query($conn,$sql);
                };
                if ($value=="HHM2") {
                    $sql = "UPDATE Auditorium SET Selected='1' WHERE Row_no='M' AND Col_no='2' AND Aud_id='HH'";
                    $result = mysqli_query($conn,$sql);
                };
                if ($value=="HHM3") {
                    $sql = "UPDATE Auditorium SET Selected='1' WHERE Row_no='M' AND Col_no='3' AND Aud_id='HH'";
                    $result = mysqli_query($conn,$sql);
                };
                if ($value=="HHB1") {
                    $sql = "UPDATE Auditorium SET Selected='1' WHERE Row_no='B' AND Col_no='1' AND Aud_id='HH'";
                    $result = mysqli_query($conn,$sql);
                };
                if ($value=="HHB2") {
                    $sql = "UPDATE Auditorium SET Selected='1' WHERE Row_no='B' AND Col_no='2' AND Aud_id='HH'";
                    $result = mysqli_query($conn,$sql);
                };
                if ($value=="HHB3") {
                    $sql = "UPDATE Auditorium SET Selected='1' WHERE Row_no='B' AND Col_no='3' AND Aud_id='HH'";
                    $result = mysqli_query($conn,$sql);
                };
                if ($value=="KKF1") {
                    $sql = "UPDATE Auditorium SET Selected='1' WHERE Row_no='F' AND Col_no='1' AND Aud_id='KK'";
                    $result = mysqli_query($conn,$sql);
                };
                if ($value=="KKF2") {
                    $sql = "UPDATE Auditorium SET Selected='1' WHERE Row_no='F' AND Col_no='2' AND Aud_id='KK'";
                    $result = mysqli_query($conn,$sql);
                };
                if ($value=="KKF3") {
                    $sql = "UPDATE Auditorium SET Selected='1' WHERE Row_no='F' AND Col_no='3' AND Aud_id='KK'";
                    $result = mysqli_query($conn,$sql);
                };
                if ($value=="KKM1") {
                    $sql = "UPDATE Auditorium SET Selected='1' WHERE Row_no='M' AND Col_no='1' AND Aud_id='KK'";
                    $result = mysqli_query($conn,$sql);
                };
                if ($value=="KKM2") {
                    $sql = "UPDATE Auditorium SET Selected='1' WHERE Row_no='M' AND Col_no='2' AND Aud_id='KK'";
                    $result = mysqli_query($conn,$sql);
                };
                if ($value=="KKM3") {
                    $sql = "UPDATE Auditorium SET Selected='1' WHERE Row_no='M' AND Col_no='3' AND Aud_id='KK'";
                    $result = mysqli_query($conn,$sql);
                };
                if ($value=="KKB1") {
                    $sql = "UPDATE Auditorium SET Selected='1' WHERE Row_no='B' AND Col_no='1' AND Aud_id='KK'";
                    $result = mysqli_query($conn,$sql);
                };
                if ($value=="KKB2") {
                    $sql = "UPDATE Auditorium SET Selected='1' WHERE Row_no='B' AND Col_no='2' AND Aud_id='KK'";
                    $result = mysqli_query($conn,$sql);
                };
                if ($value=="KKB3") {
                    $sql = "UPDATE Auditorium SET Selected='1' WHERE Row_no='B' AND Col_no='3' AND Aud_id='KK'";
                    $result = mysqli_query($conn,$sql);
                };
            };
            $sql2='CALL TicketSeatAdd()';
            $result=mysqli_query($conn,$sql2);
        };
        
    ?>
    
    <div class="formbox">
            <br><h1><pre>   Customer Details</pre></h1><br>
            <h2><pre>    Please enter your details as to be included in the movie ticket:</pre></h2>
            <form action="TicketPage.php" method="POST">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" value=""><br><br>
            <label for="email">Email:</label><br>
            <input type="text" id="email" name="email" value=""><br><br>
            <label for="phone">Phone:</label><br>
            <input type="text" id="phone" name="phone" value=""><br><br>
            <input class="fbutton" type="submit" name="final" value="Book Tickets">
        </form>
    </div> 
</body>
</html>