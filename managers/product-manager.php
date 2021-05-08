<?php


class ProductManager {
    public $conn;

    function __construct($conn) {
        $this->conn = $conn;
    }

    public function CreateProduct($product) {

        $sqlQuery = "INSERT INTO Product (productName, active)
                                Values 
                                (   
                                    '".$product->productName."',
                                    ".$product->isActive."

                                )";


        if($this->conn->query($sqlQuery) == TRUE ) {
            echo "New Create";
        } else {
            echo "Error: " . $sqlQuery . "<br>" . $this->conn->error;
        }
    }


    public function UpdateProduct() {

    }

    public function DeleteProduct() {

    }

    public function GetProduct($productId) {
        $sqlQuery = "SELECT * FROM Product WHERE productId = ".$productId;
        
        $result = $this->conn->query($sqlQuery);
        
        $productData = new ProductData();

        if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {
                $productData->productId = $row["productId"];
                $productData->productName = $row["productName"];
                $productData->isActive = $row["active"];
                return $productData;
            }

        } else {
            return null;
        }

    }

    public function GetAllProduct() {
        $sqlQuery = "SELECT * FROM Product ";

        $result = $this->conn->query($sqlQuery);
        
        $productData = new ProductData();

        if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {
                array($productData);
            }
    }

}

?>