<?php
session_start();
if($_POST['idj']==""){
 echo "<script>location.href='/login.php'</script>";
}
  $_SESSION["id"]= $_POST['idj'];
  $_SESSION["passwd"]= $_POST['pas'];
  echo "<script>location.href='/view3.php'</script>";
?>
