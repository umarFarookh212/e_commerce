<?php
session_start();
$servername= "localhost";
$username= "root";
$password= "";
$dbname= "amazonsite";

$conn= new mysqli($servername, $username, $password, $dbname);
$sql= "SELECT * FROM newregister WHERE email= '".$_POST['email']."' ";

$result= $conn->query($sql);
$status= "failed";
if($result->num_rows<0){
    $_SESSION['name']= $_POST['name'];
    // $_SESSION['email']= $_POST['email'];
    // $_SESSION['password']= $_POST['password'];
    // $_SESSION['mobile']= $_POST['mobile'];
    $sql= "INSERT INTO newregister(name, email, mobile, password) VALUES
('".$_POST['name']."','".$_POST['email']."', '".$_POST['mobile']."', '".$_POST['password']."')";

$conn->query($sql);
$status= "success";
}
$conn->close();
if($status== 'success'){
    header("location:dashboardform.php&$status");exit;
}
else{
    header("location:loginform.php");exit;
}
?>