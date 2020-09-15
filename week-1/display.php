<?php
require_once("db.php");

$sql = "SELECT `id`, `product_name`, `description`, `created_at` 
        FROM `products` WHERE 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<br>created_at: ". $row["created_at"]. ", / product_name: ". $row["product_name"]. ", / description: " . $row["description"] ."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>