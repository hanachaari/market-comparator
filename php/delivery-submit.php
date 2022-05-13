<?php
session_start();
?>
<?php
$title = "basic offer";
$stylesheet="css/delivery.css";
include "template.php";
?>

<?php function body() { ?>

<center>

    <?php
        $customer_id = $_SESSION['id'];
        $city=$_GET["city"];
        $region=$_GET["region"];

        include "connection.php";
        $shoppingList = $db->cart()
          ->where("customer_id = ?", $customer_id);
    ?>
    <img width="600" height="336" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_42kbik7aUQif4XGtPXihHtOHnNdAIgEIflWZv_kW3qDjqWydJAnCpfUq3P2vP1Hejfs&usqp=CAU" alt="delivery"><br>


    <table>



        <?php
          $min = null;
          $bestMarket = null;
      $closestLocations = $db->location()
          ->where("region = ? AND city = ?", $region,$city);
          foreach ($closestLocations as $closestLocation ) {
            $marketId =$closestLocation['market_id'];
            $productAvailable = true;
            $sum = 0;

            foreach ($shoppingList as $item) {
              $productKindId = $item['product_kind_id'];
              $productKind = $db->product_kind[$productKindId];

              $product = $db->product("name = ? AND category = ? AND market_id = ?", $productKind['name'], $productKind['category'], $marketId)->fetch();
              if($product) {
                $sum += $product['price'] * $item['quantity'];
              } else {
                $productAvailable = false;
                $sum=$sumPreviousMarket;
                break;
              }
            }

            if ($productAvailable) {
              if($min == null || $sum < $min) {
                $min = $sum;
                $street= $closestLocation["street"];
                $bestMarket = $db->professional("id = ?", $marketId)->fetch();

              }
            }
            $sumPreviousMarket= $sum;

          }?>
<tr>
  <td>
    <center>

    <div class="text">
    <h1>The most suitable market for you is <b class="market"><em> <?php echo $bestMarket["market_name"]; ?></em></b> </h1>
    <h3> <b class="street">Street</b>: <?php echo $street;  ?></h3>
    <h4>The cost of your grocery:<b class="market">  <?php echo $sum; ?></b> D </h4>
    </div>

    <?php $popularityMarket = $db->popularity("market_id = ? ", $bestMarket["id"])->fetch();
      $variable = $popularityMarket["popularity"];
      $newPopularityMarket = array(
              "popularity" => $variable + 1 ,
              "customer_order" => $customer_id,
              "market_id" => $bestMarket["id"],
      );
      $affected = $popularityMarket->update($newPopularityMarket);

    ?>
    <p><a href="delete-cart.php"><img height="50" width="50" src="pics/tick.png" alt="Valid icon"></a></p>
  </center>

  </td>

</tr>
    </table>
<?php } ?>
</center>
