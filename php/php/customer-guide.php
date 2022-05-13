<?php
session_start();
$title = "guide";
$stylesheet="css/guide.css";

include "template.php";
?>

<?php function body() { ?>
<center>
  <div class="menu">
      <h1> MENU </h1>
  </div>

<table class="list">
    <tr>
        <td class="list" >
          <ul>
            <li>Search product name</li>
            <li>Add to cart</li>
            <li>Back menu</li>
            <li>Finish shopping</li>
          </ul>

        </td>
        <td class="list">
          <ul>
            <li>Select categories</li>
            <li>Add to cart</li>
            <li>Back menu</li>
            <li>Finish shopping</li>
          </ul>
        </td>
    </tr>
    <tr>
        <td colspan="2" class="list">
          <ul>
            <li>Cart</li>
            <li>Modify or delete an item</li>
            <li>Finish shopping</li>
          </ul>
        </td>
    </tr>
    <tr>
        <td colspan="2" class="list">
          <ul>
            <li>Finish shopping</li>
            <li>Delivery offer</li>
            <li>Basic offer</li>
          </ul>
        </td>
    </tr>
    <tr>
        <td class="list">
          <ul>
            <li>Delivery offer</li>
            <li>Get the best market at low price</li>
            <li>Menu</li>

          </ul>

        </td>
        <td class="list">
          <ul>
            <li>Basic offer</li>
            <li>Get the best market near your place</li>
            <li>Menu</li>

          </ul>

        </td>
    </tr>
</table>
</center>





<?php } ?>
