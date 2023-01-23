<?php
require_once 'Create.php';
require_once 'Read.php';
require_once 'Delete.php';

class ProductController { 
    private $create;
    private $read;
    private $delete;

    public function __construct(){
        $this->create = new Create();
        $this->read = new Read();
        $this->delete = new Delete();
    }

    public function handleRequest($method) {
        switch ($method) {
            case 'POST':
                $data = json_decode(file_get_contents('php://input'), true);
                $this->create->createProduct($data);
                break;
            case 'GET':
                $this->readAllProducts();
                break;
            case 'DELETE':
                $data = json_decode(file_get_contents('php://input'), true);
            $this->deleteProduct($data);
            break;
            default:
                http_response_code(405);
                echo json_encode(array("message" => "Method Not Allowed"));
                break;
        }
    }

    public function createProduct($data) {
        $this->create->createProduct($data);
    }

    public function readAllProducts() {
        $products = $this->read->getAllProducts();
        if($products){
            http_response_code(200);
            echo json_encode($products);
        }else{
            http_response_code(404);
            echo json_encode(array("message" => "No products found"));
        }
    }

    public function deleteProduct($data) {
        if($this->delete->deleteMultipleProducts($data)){
            http_response_code(200);
            echo json_encode(array("message" => "Products Deleted Successfully"));
        }else{
            http_response_code(404);
            echo json_encode(array("message" => "Error Deleting Products"));
        }
    }
}
