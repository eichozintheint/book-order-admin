<?php

include_once 'controller/OrderController.php';
$order_id=$_POST['order_id'];

$order_controller=new OrderController();
$order_status=$order_controller->updateStatus($order_id);

if($order_status){
    echo $order_id;
}
?>