<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Repositories\Interfaces\OrderRepositoryInterface;

class OrderController extends Controller
{
    private $orderRepository;

    public function __construct(OrderRepositoryInterface $orderRepository) 
    {
        $this->orderRepository = $orderRepository;
    }

    public function index()
    {
        return response()->json([
            'status' => 200,
            'message' => 'success',
            'data' => $this->orderRepository->getAllOrders()
        ]);
    }

    public function store(StoreOrderRequest $request)
    {
        $orderDetails = $request->only([
            'client',
            'details'
        ]);

        return response()->json([
            'status' => 200,
            'message' => 'success',
            'data' => $this->orderRepository->createOrder($orderDetails)
        ]);
    }

    public function show($id)
    {
        return response()->json([
            'status' => 200,
            'message' => 'success',
            'data' => $this->orderRepository->getOrderById($id)
        ]);
    }

    public function getFulfilledOrders() 
    {
        return response()->json([
            'status' => 200,
            'message' => 'success',
            'data' => $this->orderRepository->getFulfilledOrders()
        ]);
    }

    public function update(UpdateOrderRequest $request, $id)
    {
        $orderDetails = $request->only([
            'client',
            'details'
        ]);

        return response()->json([
            'status' => 200,
            'message' => 'success',
            'data' => $this->orderRepository->updateOrder($id, $orderDetails)
        ]);
    }

    public function destroy($id)
    {
        $this->orderRepository->deleteOrder($id);

        return response()->json([
            'status' => 200,
            'message' => 'success'
        ]);
    }
}
