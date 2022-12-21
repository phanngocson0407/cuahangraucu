<?php
include_once "../Model/Product.php";
include_once "../controller/BaseController.php";

class OrderController{

    public function __construct ($order_action){
        switch($order_action){
        default:
            $product = new Product("","","","",0);
            $data =$this->getAllProducts($product);
            var_dump($data);
            die;
            break;
        }
    }

    public function getAllProducts ($product){
        return $product -> getAllProducts();
    }
}

$order_action ="";
if(isset($_POST['order_action'])){
    $order_action =$_POST['order_action'];
}
$orderController =new OrderController ($order_action);