<?php

require_once 'vendor\autoload.php';

use App\classes\Student;

use App\classes\Product;

if(isset($_GET['page']))
{
    if($_GET['page']=='home')
    {
        $student = new Student();
        $students = $student->allStudent();
        include'pages/home.php';
    }
    elseif ($_GET['page']=='about')
    {
        include 'pages/about.php';
    }
    elseif ($_GET['page']=='product')
    {
        $product = new Product();
        $products = $product->allProduct();
        include 'pages/product.php';
    }
    elseif ($_GET['page']=='product-details')
    {
        $product = new Product();
        $products = $product->allProduct();
        $productDetails = $product->getProductDeatils($_GET['id']);
        include 'pages/product-details.php';
    }
    elseif ($_GET['page']=='gallery')
    {
        $product = new Product();
        $products = $product->allProduct();
        include 'pages/gallery.php';
    }
}

