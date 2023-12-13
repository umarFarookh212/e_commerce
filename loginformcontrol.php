<?php
session_start();
$servername= "localhost";
$username="root";
$password="";
$dbname= "amazonsite";

$conn= new mysqli($servername, $username, $password, $dbname);

$sql= "SELECT name, email, password FROM newregister where email= '".$_POST['email']."' ";
$result= $conn->query($sql);
$status= "invalid email";
$emailerror= "email does not exists";
$conn->close();

if($result->num_rows>0){
    $_SESSION['email']= $_POST['email'];
    $_SESSION['password']= $_POST['password'];
    // $_SESSION['name'] = $_POST['name'];
    // $_SESSION['mobile'] = $_POST['mobile'];
    $status= "valid";

    if($status == "valid"){
        header('location:dashboardform.php');exit;
    }
}
else{
    header("location:registerform.php&&$emailerror");exit;
}
?>


