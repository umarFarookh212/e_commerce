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
        <p>E-commerce</p>
        <p>Dashboard</p>
        <div class="nav-search">
            <input type="text" id="search"  placeholder="Search">
            <!-- <button type="submit" class="submitBtn"><i class="fa-solid fa-magnifying-glass"></i></button> -->
        </div>  
        <p><B>Good Morning</B></p>
        <p><?php echo $_SESSION['email']?></p>
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
            <div class="graph">
                <div class="img-graph"></div>
            </div>
            <div class="product">
                <p>Top Product</p>
                <a href="https://in.nothing.tech/pages/phone-2?variant=42274864726189" target="blank" alt= "Nothing phone 2">
                <div class="img-product">
                    </div>
                </a>
                </div>
            <div class="resultbar" style="overflow-x: auto">
                <h4>Recent Order</h4>
                <table>
                    <tr>
                        <th>Product</th>
                        <th>Product ID</th>
                        <th>Customer</th>
                        <th>Price</th>
                    </tr>
                    <tr>
                        <td>Nothing phone2</td>
                        <td>#663142</td>
                        <td>John Larry</td>
                        <td>$500</td>
                    </tr>
                    <tr>
                        <td>Samsung s22</td>
                        <td>#663132</td>
                        <td>Smith</td>
                        <td>$800</td>
                    </tr>
                    <tr>
                        <td>Oppo A78</td>
                        <td>#663149</td>
                        <td>Andrew</td>
                        <td>$300</td>
                    </tr>
                    <tr>
                        <td>Apple Iphone X</td>
                        <td>#663117</td>
                        <td>Buttler</td>
                        <td>$900</td>
                    </tr>
                </table>

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
