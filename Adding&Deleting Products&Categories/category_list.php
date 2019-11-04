<?php
    require_once('database.php');

    // Get all categories
    $query = 'SELECT * FROM categories
              ORDER BY categoryID';
    
    $statement = $db->prepare($query);
    $statement->execute();
    $categories = $db->query($query);
    
    $statement->closeCursor();
    
?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
    <div id="page">

    <div id="header">
        <h1>Product Manager</h1>
    </div>

    <div id="main">

    <h1>Category List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>
        
    <!-- add code for the rest of the table here -->
    <?php foreach($categories as $category) : ?>
        <tr>
            <td><?php echo $category['categoryName'] ?></td>
            <td><form action="delete_category.php" method="post"> 
                    <input type="hidden" name="category_id"
                           value="<?php echo $category['categoryID']?>">
                    <input type="submit" value="Delete">
                </form></td>
        </tr>
        <?php endforeach;?>
    </table>
    <br />

    <h2>Add Category</h2>
    
    <!-- add code for the form here -->
        <form action="add_category.php" method="post">

                
                <label>Name:</label>
                <input type="text" name="categoryName">
                <br>


                <label>&nbsp;</label>
                <input type="submit" value="Add Category">
                <br>
            </form>
    
    
    <br>
    <p><a href="index.php">List Products</a></p>

    </div> <!-- end main -->

    <div id="footer">
        <p>
            &copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.
        </p>
    </div>

    </div><!-- end page -->
</body>
</html>