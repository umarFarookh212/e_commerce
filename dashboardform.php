<?php
session_start();
if(empty($_SESSION['email'])){
    header('location:registerform.php');exit;
}
else if(!empty($_SESSION['email'])){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <div class="nav-header">
        <p>Company Name</p>
        <p >Dashboard</p>
        <input type="text" id="search"  placeholder="Search">
        <button type="submit" class="submitBtn"><i class="fa-solid fa-magnifying-glass"></i></button>
        <p></p><i>Good Morning</i> <?php echo $_SESSION['email']?></p>
        <div class="nav-search">
        </div>
    </div>
    <div class="body">
        <div class="navbar">
            <a href="dashboardform.php">Home</a>
            <a href="#">About</a>
            <a href="" onclick= "alert('9441812115')">Contact</a>
            <a href="profileform.php">Profile</a>
            <a href="logoutform.php">Logout</a>
        </div>
        <div class="body-main">
            <div class="graph"  style="background-image: url('pictures/graph.jpg') ;"></div>
            <div class="product">
            </div>
        </div>
    </div>
    
</body>
</html>

<?php }

else{
    header('loginform.php');exit;
}
?>
