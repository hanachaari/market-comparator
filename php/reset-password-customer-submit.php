<?php
session_start();
$newPassword=$_GET["newPassword"];
$newPasswordCheck=$_GET["newPasswordCheck"];
$id=$_SESSION["id"];

if($newPassword==$newPasswordCheck){
  include "connection.php";
  $customer=$db->customer[$id];
  // how to update a column in a table from db
  $customer['password'] = $newPassword;
  $affected = $customer->update();
    header("Location: login-customer.php");
}
else {
  header("location: reset-password-customer.php");
}

 ?>
