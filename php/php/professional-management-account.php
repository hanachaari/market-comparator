<?php
session_start();
?>
<?php
$title = "Menu";
$stylesheet="css/professionalMenu.css";
include "template-market.php";
$market_id = $_SESSION['id'];
?>

<?php function body() { ?>


<main>
	<br>
	<center>
<div class="welcome">
	<h2>Welcome <?php echo $_SESSION['market_name'] ?></h2>
</div>

<br>


<table>
<tr>

<td>
	<div id="container">
		<a href="product-menu.php" ><img src="pics/product.png" alt="Omar"> </a>
			<div class="box-text">
			<h1>PRODUCTS</h1>
			</div>
	</div>
</td>

<td>
	<div id="container">
		<a href="location-menu.php" ><img src="pics/location.png" alt="location"> </a>
			<div class="box-text">
			<h1>LOCATIONS</h1>
			</div>
	</div>
</td>
</tr>

<tr>

<td>
	<div id="container">
		<a href="order-menu.php" ><img src="pics/order.png" alt="orders"> </a>
			<div class="box-text">
			<h1>ORDERS</h1>
			</div>
	</div>
</td>

<td>
	<div id="container">
		<a href="graph-orders.php"><img src="pics/popularity.png" alt="popularity"> </a>
			<div class="box-text">
			<h1>POPULARITY</h1>
			</div>
	</div>
</td>
</tr>


<!--
<td> <img width="300" height="250" src="pics/location.png" alt="location image" /></td>
<td><img width="300" height="250" src="pics/order.png" alt="order" /></td>
<td><img width="300" height="250" src="pics/popularity.png" alt="popularity" /></td>
</tr>
<tr>
<td>
<a href="product-menu.php"> <p style="text-align:center;"><b>PRODUCTS</b></p></a>
</td>
<td>
  <a href="location-menu.php"><p style="text-align:center; "><b>LOCATIONS</b></p></a>
</td>
<td><a href="order-menu.php"><p style="text-align:center; "><b>ORDERS</b></p></a></td>
<td><a href="popularity.php"><p style="text-align:center; "><b>POPULARITY GROWTH</b></p></a></td>
-->
</table>




</main>

</center>


<?php } ?>
