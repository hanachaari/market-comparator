<?php
session_start();
$newPassword=$_GET["newPassword"];
$newPasswordCheck=$_GET["newPasswordCheck"];
$id=$_SESSION["id"];

if($newPassword==$newPasswordCheck){
  include "connection.php";
  $market=$db->professional[$id];
  // how to update a column in a table from db
  $market['password'] = $newPassword;
  $affected = $market->update();
    header("Location: login-professional.php");
}
else {
  header("location: reset-password-market.php");
}

 ?>
