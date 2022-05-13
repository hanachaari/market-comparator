<?php
$title = "change quantity";
$stylesheet="css/Category.css";
include "template.php";
?>

<?php function body() { ?>
  <center>

    <?php
    $productKindId=$_GET['productKindId'];
    include "connection.php";
    $item = $db->cart("product_kind_id= ?", $productKindId)->fetch();
    $productKind =$db->product_kind[$productKindId] // need it just for the name and image
    ?>
    <div class="product">

          <form class="change-quantity" action="change-quantity-submit.php" method="get">
          <div class="mb-3">
          <?php if ($productKind["image"]) { ?>
          <img  class="item" src="<?php echo $productKind["image"] ;?>" alt=<?php $productKind["name"] ;?> >
          <?php } ?>
          <h3><?php echo $productKind['name']; ?></h3>
          <input type="hidden" name="itemId" value="<?php echo $item['id'] ?>" />
          <p><input class="form-control" type="number" name="newQuantity" value="0"/>Kg</p>
          <input  class="btn btn-primary" type="submit" name="change" value="save changes">
          <button class="btn btn-warning" ><a href="delivery.php"><small><b>finish shopping</b></small></a></button>

          </div>
          </form>


    </center>
  </div>

<?php } ?>
