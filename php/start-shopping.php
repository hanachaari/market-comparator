<?php session_start();
if (!isset($_SESSION['firstName'])) header("Location: login-customer.php" );//debugging trick ?>
<?php
$title = "Menu";
$stylesheet="css/startshopping.css";

include "template.php";
?>

<?php function body() { ?>

    <center>
      <div class="welcome">
      <h2> Welcome  <?php echo $_SESSION['firstName'] ;?></h2>
      <a href="delivery.php"><img src="pics/finish-shopping.png" alt="finish shopping"height="100" width="150" ></a>

    </div>








    <br>
    <table>
      <tr>
          <div class="look">
            <form  action="searched-product.php" method="get">
            <input type="text" name="product" value="" placeholder="look for a product">
              <button type="submit"class="btn btn-primary">search</button>
            </form>
          </div>
      </tr>
      <div class="categories">



<div class="container1">
  <img src="pics/fruits-veggies.png" alt="Avatar" class="image1">
  <div class="overlay1">
  <a href="fruits-veggies.php"><div class="text1">Fruits & Veggies</div></a>
  </div>
</div>

<div class="container2">
<img src="pics/by-milk-products.png" alt="Avatar" class="image2">
<div class="overlay2">
<a href="by-milk-products.php"><div class="text2">Milk Products</div></a>
</div>
</div>


<div class="container3">
<img src="pics/seafood-meat-poultry.png" alt="Avatar" class="image3">
<div class="overlay3">
<a href="seafood-meat-poultry.php"><div class="text3">Seafood Meat Polutry</div></a>
</div>
</div>

<div class="container4">
<img src="pics/cooking.png" alt="Avatar" class="image4">
<div class="overlay4">
<a href="cooking.php"><div class="text4">Cooking</div></a>
</div>
</div>

<div class="container5">
<img src="pics/cosmetics.png" alt="Avatar" class="image5">
<div class="overlay5">
<a href="cosmetics.php"><div class="text5">Cosmetics</div></a>
</div>
</div>

<div class="container6">
<img src="pics/hygiene.png" alt="Avatar" class="image6">
<div class="overlay6">
<a href="hygiene.php"><div class="text6">Hygiene</div></a>
</div>
</div>

<div class="container7">
<img src="pics/flour-pasta-sides.png" alt="Avatar" class="image7">
<div class="overlay7">
<a href="flour-pasta-sides.php"><div class="text7">Flour Pasta & sides</div></a>
</div>
</div>


      </div>
    </table>
      </center>
<?php } ?>
