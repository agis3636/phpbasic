<?php
require "managers/product-manager.php";
require "data/product-data.php";
require "connect_db.php";

function GetProductExample($conn) {
    $productManager = new ProductManager($conn);

    $productData = $productManager->GetProduct(5);

    echo $productData->productId
    ."<br/>".
    $productData->productName
    ."<br/>".
    $productData->isActive;
}

function CreateProductExample($conn) {
    $productManager = new ProductManager($conn);

    $productData = new ProductData();

    $productData->productName = "baso";

    $productData->isActive = 1;

    $productManager->CreateProduct($productData);
}

// CreateProductExample($conn);
GetProductExample($conn);



?>