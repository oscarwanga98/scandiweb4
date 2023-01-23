<?php
include_once 'Product.php';

class Delete extends Product {
    private $conn;
    private $host ='localhost';
    private $db_name='scandiweb';
    private $username='root';
    private $password='';

    public function __construct() {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);
    }

 
    public function deleteMultipleProducts($ids) {
        $ids = array_map('intval', $ids);
        $query = "DELETE FROM product WHERE specialId IN (".implode(',', $ids).")";
        $result = $this->conn->query($query);
        if ($result) {
            print_r($result);
            return true;
        } else {
            return false;
        }
    }

}
