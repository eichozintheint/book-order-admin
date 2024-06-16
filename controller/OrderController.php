<?php

include_once './model/Order.php';

class OrderController{
    private $order;

    public function __construct()
    {
        $this->order=new Order();
    }

    public function getOrders()
    {
        return $this->order->getOrders();
    }

    public function updateStatus($order_id){
        return $this->order->updateStatus($order_id);
    }
}

?>