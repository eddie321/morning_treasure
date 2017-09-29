<?php

function build_form($name, $manufacturer, $product_description, $in_stock, $product_category)
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
        <select name="in_stock">';
        require 'in_stocks.php';
        foreach ($in_stocks as $id => $in_stock) {   // id is key 0,1,2,3 etc in in_stock.php
                $form .= "<option value=$id>$in_stock</option>";
        }
        $form .= ' 
        </select>

        <br>
        <br>
        In stock:
        <select name="product_category">';
        require 'product_category.php';
        foreach ($product_category as $id => $product_category) {   // id is key 0,1,2,3 etc in in_stock.php
                $form .= "<option value=$id>$product_category</option>";
        }
        $form .= ' 
        </select>
        <input type="submit">
        </form>;

    return $form;
    }
