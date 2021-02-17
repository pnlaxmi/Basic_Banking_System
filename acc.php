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

/* sql to create table
$sql = "CREATE TABLE bank (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
email VARCHAR(50),
balance INT(9)
)";

if ($conn->query($sql) === TRUE) {
  echo "Table bank created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
*/
//records
$sql = "SELECT * FROM bank "; 
$result = $conn->query($sql); 
$conn->close();

?>

<!DOCTYPE html> 
<html lang="en"> 
  
<head> 
    <meta charset="UTF-8"> 
    <title>VIEW CUSTOMERS</title> 
    <!-- CSS FOR STYLING THE PAGE --> 
    <style> 
        body {
              margin: 0;
              border:0;
              background-image:url('ac.jpg');
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
          background-color: #ddd;
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
            color: white; 
            font-size: xx-large;
            font-style: 'comic Sans'; 
            
        } 
        th,td
         { 
            font-weight: bold; 
            border: 1px white; 
            padding: 10px; 
            background-color: #ff726f; 
            color: white;
            text-align: center;
            font-style: 'comic Sans';  
        } 
        th{
            background-color: #ff3333;
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
    <section> 
        <h1>CUSTOMERS DETAILS</h1> 
        <!-- TABLE CONSTRUCTION--> 
        <table> 
            <tr> 
                <th>ID</th> 
                <th>NAME</th> 
                <th>EMAIL</th> 
                <th>BALANCE</th> 
            </tr> 
            <?php   // LOOP TILL END OF DATA  
                while($rows=$result->fetch_assoc()) 
                { 
             ?> 
            <tr> 
                <td><?php echo $rows['id'];?></td> 
                <td><?php echo $rows['name'];?></td> 
                <td><?php echo $rows['email'];?></td> 
                <td><?php echo $rows['balance'];?></td> 
            </tr> 
            <?php 
                } 
             ?> 
        </table> 
        
    </section> 
</body> 
  
</html> 


