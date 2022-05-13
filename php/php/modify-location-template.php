




    <?php
    $id = $_GET['id'];
    $city = $_GET['city'];
    $region = $_GET['region'];
    $street = $_GET['street'];
    $number = $_GET['number'];
    include "connection.php";
    $location = $db->location[$id];
    if(empty ($city)){
        $city = $location['city'];
    }
    if(empty ($region)){
        $region = $location['region'];
    }
    if(empty ($street)){
        $street = $location['street'];
    }
    if(empty ($number)){
        $number = $location['number'];
    }
    $newLocation = array(
            "city" => $city,
            "region" => $region,
            "street" => $street,
            "number" => $number,
    );
    $affected = $location->update($newLocation);
    //$address = $location['city'].$location['region'].$location['street'];
    header("Location:location-menu.php");
    ?>
