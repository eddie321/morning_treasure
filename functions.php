<?php

function build_form($name, $manufacturer, $product_description, $availability, $product_category)
{


    $form = '<form method="POST" action="">
    
    
    <h1>Golf Gear Database</h1>
    <br>
        Product Name:
        <input type="text" name="name" value="' . htmlspecialchars($name) . '">
        <br>
        <br>
        Manufacturer:
        <select name="genre">';
        require 'manufacturers.php';
        foreach ($manufacturers as $id => $manufacturer) {   // id is key 0,1,2,3 etc in genres.php
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
        In stock:
        <select name="product_category">';
        require 'product_category.php';
        foreach ($product_category as $id => $product_category) {   // id is key 0,1,2,3 etc in availability.php
                $form .= "<option value=$id>$product_category</option>";
        }
        $form .= ' 
        </select>
        <input type="submit">
        </form>';

    return $form;
    }
