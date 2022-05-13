<?php
session_start();
$title = "guide";
$stylesheet="css/guide.css";
include "template-market.php";
?>

<?php function body() { ?>
<center>
  <div class="menu">
      <h1> MENU </h1>
  </div>
<table class="list">
    <tr>
        <th class="list">
            <p>Products</p>
        </th>
        <th class="list">
            <p>Locations</p>
        </th>
        <th class="list">
            <p>Orders</p>
        </th>
        <th class="list">
            <p>Popularity growth</p>
        </th>
    </tr>
    <tr>
        <td class="list">
          <ul>
            <li>Search product</li>
            <li>Add Product</li>
            <li>Modify Product</li>
            <li>Delete Product</li>
          </ul>
        </td>
        <td class="list">
          <ul>
            <li>Search location</li>
            <li>Add location</li>
            <li>Modify location</li>
            <li>Delete location</li>

          </ul>

        </td>
        <td class="list">
          <ul>
            <li>List the number of orders</li>
            <li>List ID of the new purchaser</li>

          </ul>

        </td>
        <td class="list">
          <ul>
            <li>List your rank</li>
            <li>Popularity percentage</li>
          </ul>

        </td>
    </tr>
</table>
</center>





<?php } ?>
