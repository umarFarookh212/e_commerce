<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="loginform.css">
</head>

<body>
<div class="card">
    <div class="card-header"><h2>Login</h2></div>
        <div class= "card-body">
        <form action="logincontrol.php" id= "login" method= "POST">
        <input type="text" name= "email" id= "email" placeholder= "Email Id" class= "input">
        <input type="password" name= "password"  id= "password" placeholder= "Enter password" class= "input">
        <input type="button" onclick= "test();" value= "Login" class="btnlogin">
        </form>
    </div>
</div>
<div class="register">new user <a href= "registerform.php">Register</a></div>

</body>
</html>

<script>
    function test(){
    var email= document.getElementById('email').value;
    var password= document.getElementById('password').value;
    if(email == ''){
        alert("Enter Email ID");
        return false;
    }
    else if(password == ''){
        alert("Enter password correctly");
        return false;
    }
    document.getElementById('login').submit();
    }
</script>
