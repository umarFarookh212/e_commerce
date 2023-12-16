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
        text-align:center ;
        color:rgb(63,23, 163);
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        font-size: 1.2rem;
      }
      input{
        margin: 10px;
        border: none;
        width: 20rem;
        font-size: 1rem;
      }
    </style>
  </head>
<body>
  Name:<input type="text" value= "<?php echo $_SESSION['name'] ?>" readonly><br>
  Email:<input type="text" value= "<?php echo $_SESSION['email'] ?> " readonly><br>
  Password:<input type="text" value= "<?php echo $_SESSION['password'] ?>" readonly><br>
  Mobile:<input type="text" value= "<?php echo $_SESSION['mobile'] ?>" readonly><br>
</body>
</html>