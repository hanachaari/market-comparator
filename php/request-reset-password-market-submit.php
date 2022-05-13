<?php
session_start();
$email=$_GET["email"];
$number=$_GET["number"];

include "connection.php";
$market=$db->professional("email = ? AND number = ?",$email,$number)->fetch();

$_SESSION["id"]=$market["id"];

if($market)
{ header("Location: reset-password-market.php");}

else
  { header("Location:login-professional.php");  }

?>
