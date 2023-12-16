<!DOCTYPE html>
<html lang="en">
<head>
    <title>userRegistration</title>
    <link rel="stylesheet" href="registerform.css">
</head>
<body class="img">
<div class= "card">
    <div class="card-header"><h2>Register</h2></div>
    <div class="card-body">
    <form action="registerformcontrol.php" method= "POST" id= "register" class="input">
        
    <input type="text"  id= "name" name="name" placeholder= 'Firstname-Lastname'class="input">
    <input type="email" id= "email" name="email" placeholder= 'Email' class="input" >
    <input type="text" id= "mobile" name="mobile" placeholder= 'Mobile' class="input" >
    <input type="text"  id= "password" name="password" placeholder= 'password' class="input">
    <input type="text"  id= "cpassword" name="cpassword" placeholder= 're-type Password' class="input">
    <input type="submit" onclick= "test();" value= "Register " id="btnRegister" class="input">
    </form>
    </div>
</div>
<p class= "login">Already existing user!<a href="loginform.php">login</a></p>

</body>
    <script>
        function test(){
            let name= document.querySelector("#name").value;
            let email= document.querySelector("#email").value;
            let mobile= document.querySelector("#mobile").value;
            let password= document.querySelector("#password").value;
            let cpassword = document.querySelector("#cpassword").value;
            let mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        
            if(email ==""){
                alert("Enter Email");
                return false;
            }
            else if(mobile == ''){
                alert("Enter mobile");
                return false;
            }
            else if(password == ""){
                alert("Enter Password");
                return false;
            }
            else if(password !== cpassword){
                alert("enter same password");
                return false;
            }
            else if(!email.match(mailformat)){
                alert("Enter Valid Email Format");
                return false;
            }
            else if(name == ""){
                alert("Please Enter UserName ");
                return false;
            } 
            } 
            // document.getElementById("btnRegister").submit();
    </script>
</html>
