<?php
$title = "modify location";
include "template-market.php";
?>

<?php function body() { ?>
  <center>

    <img width="650" height="350" src="https://tmstools.co.th/wp-content/uploads/2016/10/map-location-pin.jpg" alt="Local image">
    <br>
    <br>
    <h2 style="text-align:center;">MODIFY your ADDRESS</h2>
<br>
    <?php $id = $_GET['id'];
    include "connection.php";
    $location = $db->location[$id]; // get by primary key
    if ($location){ ?>

    <form action="modify-location-template.php">
        <label for="city"><p><b>City: </b></p></label>
        <input type="text" name="city" value="<?php echo $location['city'] ?>" id="city">
        <br>

        <label for="region"><p><b>Region: </b></p></label>
        <input type="text" name="region" id="region" value="<?php echo $location['region'] ?>">
        <br>

        <label for="street"><p><b>Street: </b> </p></label>
        <input type="text" name="street" value="<?php echo $location['street'] ?>" id="street">
        <br>

        <label for="number"><p><b>Fax number: </b> </p></label>
        <input type="text" name="number" value="<?php echo $location['number'] ?>" id="number">
        <br>

        <input type="hidden" name="id" value="<?php echo $location['id'] ?>" />



        <button type="submit"class="btn btn-success" style="float: right;margin:10px 18.2% 0 0;"><small><b>CONFIRM</b></small></a></button>
  </form>

        <button class="btn btn-warning" style="float: left;margin:10px 0 0 18.2%;" ><a href="location-menu.php"><small><b>CANCEL</b></small></a></button>
<br>
    <?php } ?>
<br>
</center>

<?php } ?>
