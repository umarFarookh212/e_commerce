<?php
session_start();
$servername= "localhost";
$username= "root";
$password= "";
$dbname= "shoppingsite";
$conn= new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT email, password FROM registerdetails WHERE email= '".$_POST['email']."'";
$result= $conn->query($sql);
$status= "Invalid";

if($result->num_rows > 0){
    $_SESSION['email'] = $_POST['email'];
    $status= "valid";
    if($status == "valid"){
        header("location:dashboard.php");exit;
        

    }
}
else{
    header("location:registration.php");
}




// $sql= "SELECT * FROM registerdetails WHERE email = '".$_POST['email']."'";


// !empty($_SESSION['email']) && !empty($_SESSION['password'])