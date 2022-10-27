<?php

require_once 'vendor\autoload.php';

use App\classes\Product;


$product  = new Product();

if(isset($_GET['page']))
{
    if($_GET['page']=='home')
    {
        $products = $product->allProduct();
        include'pages/home.php';
    }
    elseif ($_GET['page']=='product-details')
    {
        $productDetails = $product->getProductDeatils($_GET['id']);
        include 'pages/product-details.php';
    }

}

