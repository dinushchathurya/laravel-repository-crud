<?php 

namespace App\Repositories\Interfaces;

interface OrderRepositoryInterface {
    public function getAllOrders();
    public function getOrderById($id);
    public function createOrder(array $orderDetails);
    public function updateOrder($id, array $newDetails);
    public function deleteOrder($id);
    public function getFulfilledOrders();
}