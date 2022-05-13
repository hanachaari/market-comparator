

    <?php
    $id = $_GET['id'];
    $name = $_GET['name'];
    $price = $_GET['price'];
    $barecode = $_GET['barecode'];
    $category = $_GET['category'];
    include "connection.php";
    $product = $db->product[$id];
    if(empty ($name)){
        $name = $product['name'];
    }
    if(empty ($price)){
        $price = $product['price'];
    }
    if(empty ($barecode)){
        $barecode = $product['barecode'];
    }
    if(empty ($category)){
        $category = $product['category'];
    }
    $newProduct = array(
            "name" => $name,
            "price" => $price,
            "barecode" => $barecode,
            "category" => $category,
    );
    $affected = $product->update($newProduct);
    header("Location: product-menu.php");
    ?>
