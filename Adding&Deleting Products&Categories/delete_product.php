<?php
require_once('database.php');
// Get IDs
$product_id = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);
$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);

if ($product_id != false && $category_id != false) {
    $query = 'DELETE FROM products
              WHERE productID = :product_id';
    $statement = $db->prepare($query);
    $statment->bindValue(':product_id', $product_id);
    $success = $statement->execute();
    $statement->closeCursor();
}
include('index.php');
?>