<?php
 session_start();

$firstName=$_GET["firstName"];
$email=$_GET["email"];
$number=$_GET["number"];
$password=$_GET["password"];

//add to the database
include "connection.php";
$customer=$db->customer("first_name=? AND email=? AND number=?  AND password=?",$firstName,$email,$number,$password)->fetch();
if($customer)
{
  header("Location: login-customer.php");
}
else{
$customer = array(
    "first_name" /*same as fields in the database*/ => $firstName,
    "number" => $number,
    "email" => $email,
    "password"=>$password,
);
$row = $db->customer()->insert($customer);// this user is the array

    $_SESSION['id'] = $row['id'];
    $_SESSION['firstName'] = $row['first_name'];

  header("Location: start-shopping.php?email=".$email);
  }
?>
