<?php
$title = "add location";
include "template-market.php";
?>

<?php function body() { ?>
<center>

<img width="650" height="350" src="https://tmstools.co.th/wp-content/uploads/2016/10/map-location-pin.jpg" alt="Location image"><br>
<br>
<h2 style="text-align:center;">ADD Location</h2>
<br>
<div class="box" style="text-align:center;">
  <form action="add-location-submit.php">
    <label for="city"><p><b>City: </b></p></label>
    <input type="text" id="city" name="city" required><br><br>

    <label for="region"><p><b>Region: </b></p></label>
    <input type="text" id="region" name="region" required><br><br>

    <label for="street"><p><b>Street: </b></p></label>
    <input type="text" id="street" name="street" required><br><br>

    <label for="number"><p><b>Fax number: </b></p></label>   <!--list the categories-->
    <input type="text" id="number" name="number" required><br><br>


              <button type="submit"class="btn btn-success" style="float: right;margin:10px 18.2% 0 0;"><small><b>CONFIRM</b></small></a></button>
        </form>

              <button class="btn btn-warning" style="float: left;margin:10px 0 0 18.2%;" ><a href="location-menu.php"><small><b>CANCEL</b></small></a></button>

</div>
</center>

<?php } ?>
