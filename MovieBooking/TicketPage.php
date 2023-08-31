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
    <title>Ticket</title>
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
            margin: 0;
            border: 1px solid black;
            }    

            table,th,td{
                top: 10vh;
                border: 1px solid black;
                width: 80%;
                padding: 5px;
            }

            .price{
                font-size: 24px;
                border: 1px solid black;
                padding: 5px;
                margin: 18px;
            }
    </style>
</head>

<body>
    <section class="top-bar">
        <div class="'left-content">
            <div id="logo"><img src="assets/images/logo.png" alt="" height="100rem"></div>
            
        </div>
        <pre><h1>   
            
        <h1 class="title"><a href="index.php">CineHome</a></h1>    
  Here's Your Ticket</h1>

      </pre>  
    </section>
    <?php
        if(isset($_POST['final'])){
            $name=$_POST['name'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $sql="UPDATE Ticket SET Name='$name',Email='$email',Phone='$phone' WHERE TicketID=(SELECT TicketID FROM Ticket ORDER BY TicketID DESC LIMIT 1)";
            $result = mysqli_query($conn,$sql);
        };
        $sql2="SELECT DISTINCT T.TicketID,Name,Email,Phone,M.Title,AgeRating,Genre,Language,Time,A.Aud_id,Seat_no FROM Auditorium A,Movie M,Screened_At S,Ticket T,Ticket_Seat TS WHERE T.TicketID=(SELECT TicketID FROM Ticket ORDER BY TicketID DESC LIMIT 1) AND T.TicketID=TS.TicketID AND T.Title=M.TItle AND A.Aud_id=S.Aud_id AND M.Title=S.Title";
        $result = mysqli_query($conn,$sql2);
        $row=mysqli_fetch_assoc($result);
        echo "<br><br><table><tr>";
        echo "<td><h3>Ticket No. : " . $row['TicketID'];
        echo "</h3></td>";
        echo "</tr><tr><td>";
        echo "‎ ‎ ‎ ‎ ‎ ";
        echo "</td></tr>";
        echo "<tr><td><h3>Name : " . $row['Name'];
        echo "</h3></td>";
        echo "</tr><tr><td>";
        echo "‎ ‎ ‎ ‎ ‎ ";
        echo "</td></tr>";
        echo "<td><h3>Email : " . $row['Email'];
        echo "</h3></td>";
        echo "</tr><tr><td>";
        echo "‎ ‎ ‎ ‎ ‎ ";
        echo "</td></tr>";
        echo "<td><h3>Phone : " . $row['Phone'];
        echo "</h3></td>";
        echo "</tr><tr><td>";
        echo "‎ ‎ ‎ ‎ ‎ ";
        echo "</td></tr>";
        echo "<td><h3>Title : " . $row['Title'];
        echo "</h3></td>";
        echo "</tr><tr><td>";
        echo "‎ ‎ ‎ ‎ ‎ ";
        echo "</td></tr>";
        echo "<td><h3>Age Rating : " . $row['AgeRating'];
        echo "</h3></td>";
        echo "</tr><tr><td>";
        echo "‎ ‎ ‎ ‎ ‎ ";
        echo "</td></tr>";
        echo "<td><h3>Genre : " . $row['Genre'];
        echo "</h3></td>";
        echo "</tr><tr><td>";
        echo "‎ ‎ ‎ ‎ ‎ ";
        echo "</td></tr>";
        echo "<td><h3>Language : " . $row['Language'];
        echo "</h3></td>";
        echo "</tr><tr><td>";
        echo "‎ ‎ ‎ ‎ ‎ ";
        echo "</td></tr>";
        echo "<td><h3>Time : " . $row['Time'];
        echo "</h3></td>";
        echo "</tr><tr><td>";
        echo "‎ ‎ ‎ ‎ ‎ ";
        echo "</td></tr>";
        echo "<td><h3>Screening At : " . $row['Aud_id'];
        echo "</h3></td>";
        echo "</tr><tr><td>";
        echo "‎ ‎ ‎ ‎ ‎ ";
        echo "</td></tr>";
        echo "<td><h3>Seats Booked : " . $row['Seat_no'];
        echo "</h3></table>";
        $sql3="SELECT COUNT(*) FROM Auditorium WHERE Selected=1;";
        $result = mysqli_query($conn,$sql3);
        $row2 = mysqli_fetch_assoc($result);
        $price = 400*$row2['COUNT(*)'];
        echo "<br>";
        echo "<span class='price'><strong>PRICE: " . $price . "</strong></span";
        echo "<br>";
    ?>
    <br>
    <body>
    </body>
</html>        