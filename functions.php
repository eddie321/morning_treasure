<?php

function build_form($name, $manufacturer, $price, $product_description, $availability, $product_category)
{


    $form = '<form method="POST" action="">
    
    
    <h1>Golf Gear Database</h1>
    <br>
        Product Name:
        <input type="text" name="name" value="' . htmlspecialchars($name) . '">
        <br>
        <br>

        Price:
        <input type="text" name="price" value="' . htmlspecialchars($price) . '">
        <br>
        <br>


        Manufacturer:
        <select name="manufacturer">';
        require 'manufacturers.php';
        foreach ($manufacturer as $id => $manufacturer) {   // id is key 0,1,2,3 etc in genres.php
                $form .= "<option value=$id>$manufacturer</option>";
        }
        $form .= ' 
        </select>
        <br>
        <br>
        Product Description:
        <br>
        <textarea name="product_description" cols="30" rows="10" value="' . htmlspecialchars($product_description) . '"></textarea>
        <br>
        <br>
        In stock:
        <select name="availability">';
        require 'availability.php';
        foreach ($availability as $id => $availability) {   // id is key 0,1,2,3 etc in availability.php
                $form .= "<option value=$id>$availability</option>";
        }
        $form .= ' 
        </select>

        <br>
        <br>
        product category:
        <select name="product_category">';
        require 'product_category.php';
        foreach ($product_category as $id => $category) {   // id is key 0,1,2,3 etc in availability.php
                $form .= "<option value=$id>$category</option>";
        }
        $form .= ' 
        </select>
        <input type="submit">
        </form>';

    return $form;
    }
