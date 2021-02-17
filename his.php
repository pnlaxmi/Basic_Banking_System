<?php
$servername = 'localhost';
$username = 'root';
$password = "";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//records
$sql = "SELECT * FROM history "; 
$result = $conn->query($sql); 
$conn->close();

?>

<!DOCTYPE html> 
<html lang="en">   
<head> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HISTORY</title> 
    <!-- CSS FOR STYLING THE PAGE --> 
    <style> 
        body {
              margin: 0;
              border:0;
              background-image:url('https://cdn.pixabay.com/photo/2017/08/30/07/56/money-2696229__340.jpg');
              background-size:100% 100%;
              background-attachment:fixed;
              }
        .topnav {
            overflow: hidden;
            background-color: #333;
            }

        .topnav a {
            float: right;
            color: #f2f2f2;
            text-align: center;
             padding: 14px 16px;
            font-family: Arial, Helvetica, sans-serif;
            text-decoration: none;
            font-size: 17px;
          }

          .topnav b {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            font-family: Arial, Helvetica, sans-serif;
            text-decoration: none;
            font-size: 17px;
          }

        .topnav a:hover {
          background-color:#ddd;
          color: black;
          }

        button{
             color:white;
             width:200px;
             height:50px;
             font-size:30px;
             font-wight:bold;
             background-color:grey;
            font-family: Arial, Helvetica, sans-serif;
            border-radius: 12%;
          }
        table { 
            margin-left: 50px; 
            font-size: large; 
            border: 1px solid black; 
        } 
  
        h1 { 
            text-align: center; 
            color: #001a00; 
            font-size: xx-large;
            font-style: 'comic Sans'; 
            
        } 
        th,td
         { 
            font-weight: bold; 
            border: 1px white; 
            padding: 10px; 
            background-color: #00b300; 
            color: white;
            text-align: center;
            font-style: 'comic Sans';  
        } 
        th{
            background-color: #004d00;
        }
  
        td { 
            font-weight: lighter; 
        } 
    </style> 
</head> 
  
<body> 
    <div class="topnav">
  <a href="index.html"><font color=yellow>HOME</font></a>
  <a href="his.php">HISTORY</a>
  <a href="trans.php">TRANSACTION</a>
  <a href="acc.php">CUSTOMER</a>
  <b><img src='d.jpg' width="30" height="20" style="vertical-align:top">   Sparks Bank</b> 
</div>
    <section> <center>
        <h1>TRANSACTION HISTORY </h1> 
        </center>
        <table> 
            <tr> 
                <th>ID</th> 
                <th>SENDER</th> 
                <th>RECIEVER</th> 
                <th>BALANCE</th> 
                <th>DATE TIME</th>
            </tr> 
            <?php   
                while($rows=$result->fetch_assoc()) 
                { 
             ?> 
            <tr>
                <td><?php echo $rows['id'];?></td> 
                <td><?php echo $rows['sender'];?></td> 
                <td><?php echo $rows['reciver'];?></td> 
                <td><?php echo $rows['balance'];?></td> 
                <td><?php echo $rows['datetime'];?></td> 
            </tr> 
            <?php 
                } 
             ?> 
        </table> 
        
    </section> 
</body> 
  
</html> 


