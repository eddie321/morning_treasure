<?php
$db = db_connect();

$valid=true;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Golf Golf Golf!!!!!</title>
</head>
<body>
<section>
        <h1>Movie DB</h1>

        <div class="form">
            <form action="" method="post">
            Product Name:
            <input type="text" name="name" value="<?php echo $name?>">
            <br>
            <br>
            Manufacturer:
            <input type="text" name="manufacturer" value="<?php echo $manufacturer?>">
            <br>
            <br>
            Product Description:
            <br>
            <textarea name="product_description" cols="30" rows="10"><?php echo $product_description?></textarea>
            <br>
            <br>
            Price:            
            <input type="text" name="price" value="<?php echo $price?>">
            <br>
            <br>
            In Stock?
            <input type="checkbox" name="in_stock" unchecked>
            <br><br>
            Product Category:
            <select name="category">
                <?php
                    foreach($categories as $id => $category){
                        echo "<option value=$id>$category</option>";
                    }
                ?>
            </select>
            <br>
            <br>
            <input class="button" type="submit" name="submit" value="Submit">
            </form>
        </div>
    </section>
</body>
</html>