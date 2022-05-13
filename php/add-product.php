<?php
$title = "add product";
include "template-market.php";
?>

<?php function body() { ?>

<center>

<img width="650" height="350" src="https://images.unsplash.com/photo-1534723452862-4c874018d66d?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Z3JvY2VyeXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&w=1000&q=80" alt="product image"><br>
<div class="add">
  <br>
  <h2 style="text-align:center;">ADD a product</h2>
  <br>
</div>

<div class="box" style="text-align:center;">
  <form action="add-product-submit.php">
    <label for="name"><p><b>Product's Name</b></p></label>
    <input type="text" id="name" name="name" required ><br><br>

    <label for="price"><p><b>Product's Price</b></p></label>
    <input type="text" id="price" name="price" required><br><br>

    <label for="barecode"><p><b>Product's Bare Code</b></p></label>
    <input type="text" id="barecode" name="barecode" required><br><br>

    <label for="category"><p><b>Product's category</b></p></label>   <!--list the categories-->
    <select name="category" id="category" required>
      <option value="seafood-meat-poultry" >Seafood Meat Polutry</option>
      <option value="cooking">cooking</option>
      <option value="cosmetics">cosmetics</option>
      <option value="hygiene">hygiene</option>
      <option value="flour-pasta-sides">flour pasta sides </option>
      <option value="fruits&veggies">Fruits and veggies</option>
      <option value="by-milk-products">by milk products</option>

    </select><br><br>

    <label for="myfile"><p><b>Select a file:</b></p></label>
      <input type="file" id="file" name="file" required>
      <div  class="form-text">This pic will be used in case of a new product.</div>


          <button type="submit"class="btn btn-success" style="float: right;margin:10px 18.2% 0 0;"><small><b>CONFIRM</b></small></a></button>
    </form>

          <button class="btn btn-warning" style="float: left;margin:10px 0 0 18.2%;" ><a href="product-menu.php"><small><b>CANCEL</b></small></a></button>

    <br>

</div>
</center>

<?php } ?>
