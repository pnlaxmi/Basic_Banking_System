<?php
 $server_name='localhost';
 $user_name='root';
 $password="";
 $dbname="mydb";
 
 $conn= new mysqli($server_name,$user_name,$password,$dbname); //mysqlite connection

 if(!$conn)
  {
    die("failed connection");
  }
//$conn->close();
?>

<!DOCTYPE html>
<html>
<head><title>Sparks Foundation</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>TRANSACTION</title> 
<style>
body {
  margin: 0;
  border:0;
  background-image:url('tran.jpg');
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
 background-color:black;
 font-family: Arial, Helvetica, sans-serif;
 border-radius: 12%;
}
.tb {
  width: 420px;
  margin-top: 50px; 
  padding: 10px;
  border: 5px solid black;
  background-color: #ffffff;
  opacity: 0.7;
  color: blue;
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
<center>
<div class="tb">
  <form action="transac.php" method="get">
    <h1>TRANSACTION</h1>
    <b ><font face="comic sans ms" size=+3>Sender : </b>
    <select name="sender" id="dropdown" width="60" height="60" required>
      <option value=""> enter sender's name</option>
      <?php
        $conn = mysqli_connect('localhost','root',"","mydb");
        $res=mysqli_query($conn,"SELECT name FROM bank");
        while($row = mysqli_fetch_array($res))
        {
          echo("<option>"." ".$row['name']."</option>");
        }
      ?>
    </select>
    <br><br>
    <b>Reciever : </b>
      <select name="reciever" id="dropdown"; required>
      <option value=""> enter reciever's name</option>
      <?php
        $conn = mysqli_connect('localhost','root',"","mydb");
        $res=mysqli_query($conn,"SELECT name FROM bank where name!='$sender'");
        while($row = mysqli_fetch_array($res))
        {
          echo("<option>"." ".$row['name']."</option>");
        }
      ?>
    </select>
    <br><br>
    <b>Amount $ : </b>
    <input name="amount" value="" type="number" min="1" required>
    <br><br>
    <button class="button" type="submit">Transaction</button>
    <br><br>
  </form>
 
</div>
</center>
</body>
</style>
</html>
