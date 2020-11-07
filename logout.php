<?php
  setcookie("login", "", time() - 3600);
  setcookie("nickUser", "", time() - 3600);
  session_destroy();
  header("Location:index.php");

?>

