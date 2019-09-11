<?php
   session_start();
   

   session_destroy();
   unset($_SESSION['login']);
   $_SESSION['message']="you r now logged out";
      header("Location: login.php");
   
?>