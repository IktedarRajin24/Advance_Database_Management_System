<?php 
session_start();
if (isset($_SESSION['email'])) {
    session_destroy();
    header("location:login-view.php");   
}
else{
    header("location:login-view.php");
}

?>