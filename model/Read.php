<?php
include_once 'Product.php';

class Read extends Product {
    private $conn;
    private $host ='localhost';
    private $db_name='scandiweb';
    private $username='root';
    private $password='';

    public function __construct() {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);
    }
    public function getAllProducts() {
        $query = "SELECT * FROM product";
        $result = $this->conn->query($query);
        if ($result->num_rows > 0) {
            $rows = $result->fetch_all(MYSQLI_ASSOC);
            $products = array();
            foreach($rows as $row){
                $this->setSpecialId($row['specialId']);
                $this->setSkuId($row['skuId']);
                $this->setName($row['name']);
                $this->setPrice($row['price']);
                $this->setProductTypeId($row['productTypeId']);
                $this->setWeight($row['weight']);
                $this->setSize($row['size']);
                $this->setLength($row['length']);
                $this->setWidth($row['width']);
                $this->setHeight($row['height']);
                $products[] = clone $this;
            }
             return $products;
        } else {
            return false;
        }
    }

    
}
