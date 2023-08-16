<?php
namespace Service;
use \PDO;
use \PDOException;

class ProductService{
    private $conn;
    public function __construct()
    {
        try{
            $this->conn = new PDO('mysql:host=localhost;dbname=php_products', "root", "Raisingthebar123!!/");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }
        
    }
    public function getProducts(){
        try{
            $sql = "SELECT * FROM products";
            $stmt = $this->conn->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }catch (PDOException $e) {
            echo "Lỗi đọc sản phẩm: " . $e->getMessage();
            return [];
        }
    }

}


?>