<?php
session_start();
// session_unset($_SESSION['email']);
// session_abort($_SESSION['email']);
session_destroy();
header('location:loginform.php');exit;
?>
<!-- 
<a href="loginform.php">login here</a>
<a href="registerform.php">register here</a> -->