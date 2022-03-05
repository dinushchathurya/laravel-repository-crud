<?php

namespace App\Repositories;

use App\Repositories\Interfaces\OrderRepositoryInterface;
use App\Models\Order;

class OrderRepository implements OrderRepositoryInterface {

    public function getAllOrders() {
        return Order::all();
    }

    public function getOrderById($id) {
        return Order::find($id);
    }

    public function createOrder(array $orderDetails) {
        return Order::create($orderDetails);
    }

    public function updateOrder($id, array $orderDetails) {
        $order = Order::find($id);
        $order->update($orderDetails);
        return $order;
    }

    public function deleteOrder($id) {
        return Order::destroy($id);
    }

    public function getFulfilledOrders() {
        return Order::where('is_fulfilled', 1)->get();
    }
    
}
