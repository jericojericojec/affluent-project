<?php
  session_start();
  unset($_SESSION['username']);
  session_destroy();
  session_commit();
  header("Location:index.php");
  exit();
?>
