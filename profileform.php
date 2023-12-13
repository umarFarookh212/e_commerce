<?php
session_start();
$servername= "localhost";
$username= "root";
$password = "";
$dbname= "amazonsite";

$conn= new mysqli($servername, $username, $password, $dbname);

$sql= "SELECT * FROM newregister WHERE email = '".$_SESSION['email']."'";

$result= $conn->query($sql);

if($result->num_rows>0){
  $sql= "SELECT * FROM newregister WHERE email = '".$_SESSION['email']."' , password= '".$_SESSION['password']."'";
  // echo $sql ;
}
?>
<html>
  <head>
    <style>
      body{
        margin:5rem 15rem 10rem;
        border: 2px solid black;
        text-align:center;
      }
      input{
        margin: 10px;
        border: none;
        width: 12rem;

      }
    </style>
  </head>
<body>
Email:<input type="text" value= "<?php echo $_SESSION['email'] ?> " readonly><br>
Password:<input type="text" value= "<?php echo $_SESSION['password'] ?>" readonly>
</body>
</html>