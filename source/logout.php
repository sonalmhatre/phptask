<?php
  session_start(); 
  session_destroy(); 
  header("Location: ../source/loginform.php"); 

?>