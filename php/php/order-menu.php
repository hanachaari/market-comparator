<?php

session_start();
$title = "orders Menu";
$stylesheet="css/delivery.css";

include "template-market.php";
function body() {
$marketId = $_SESSION['id'];



include "connection.php";
$popularityMarket = $db->popularity("market_id = ? ", $_SESSION['id'] )->fetch();

$order = $popularityMarket['customer_order'];
$popularity = $popularityMarket['popularity'];

 ?>

    <center>
      <img align="center" class="center" width="400" height="350" src="pics/order.png"alt="orders image"><br>

      <div class="">
        <h1>orders</h1>
      </div>
    <div class="popularity">
    <p>You had <b> <?php  echo $popularityMarket['popularity']; ?></b> orders in total</p>
<br>
    <p>The client of identifiant<b>  <?php echo $order; ?></b> has done a purchase</p>


  </div>
  </center>
<?php } ?>
