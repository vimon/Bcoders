<?php
   session_start();
   
   if(session_destroy()) {
      header("Location:var/www/html/eclipse/register/login.php");
   }
?>