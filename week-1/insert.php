
<?php
require_once("db.php");
if (isset($_POST['product_name']) && isset($_POST['description'])) {
    if(!empty($_POST['product_name']) && !empty($_POST['description']))
    {
        $product_name=$_POST['product_name'];
        $description = $_POST['description'];
        $sql = "INSERT INTO `products`(`product_name`, `description`) 
                VALUES ('$product_name','$description')";
        if (mysqli_query($conn, $sql)) {
            echo "Success!";
        } else {
            echo "Failed";
        }
    }
    else{
        echo 'Error! Fields are required to fill';
    }
}
?>