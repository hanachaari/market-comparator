<?php
session_start();
$email=$_GET["email"];
$number=$_GET["number"];

include "connection.php";
$customer=$db->customer("email = ? AND number = ?",$email,$number)->fetch();

$_SESSION["id"]=$customer["id"];

if($customer)
{ header("Location: reset-password-customer.php");}

else
  { header("Location:login-customer.php");  }

?>
