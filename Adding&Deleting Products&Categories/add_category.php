<?php

$category_name = filter_input(INPUT_POST, 'categoryName');


if ($category_name == null || $category_name == false) {
    $error = "Invalid product data. Check all fields and try again.";
    include('error.php');
} else {
    require_once('database.php');
    
    $query = 'INSERT INTO categories
                (categoryName)
             VALUES
                (:category_name)';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_name', $category_name);
    $statement->execute();
    $statement->closeCursor();
    
    include('category_list.php');
}
?>
