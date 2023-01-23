<?php
include_once 'Product.php';

class Create extends Product {
    private $conn;
    private $host ='localhost';
    private $db_name='scandiweb';
    private $username='root';
    private $password='';

    public $specialId;
    public $skuId;
    public $name;
    public $price;
    public $productTypeId;
    public $weight;
    public $size;
    public $length;
    public $width;
    public $height;
    

    public function __construct() {
        
        
    }

    public function createProduct($data) {
        parent::__construct($data['specialId'],$data['skuId'], $data['name'], $data['price'], $data['productTypeId'], $data['weight'], $data['size'], $data['length'], $data['width'], $data['height']);
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);

        $query = "INSERT INTO product (specialId, skuId, name, price, productTypeId, weight, size, length, width, height) VALUES ('$this->specialId', '$this->skuId', '$this->name', '$this->price', '$this->productTypeId', '$this->weight', '$this->size', '$this->length', '$this->width', '$$this->height')";
        $result = $this->conn->query($query);
        if ($result) {
            echo "Product added successfully";
        } else {
            echo "Error: " . $this->conn->error;
        }
    }
}
