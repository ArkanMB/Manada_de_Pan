<?php

namespace App\Http\Controllers;

use App\Models\OrderService;
use App\Http\Resources\OrderServiceResource;
use App\Http\Requests\OrderServiceRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


class OrderServiceController extends Controller
{

    public function index(): JsonResource
    {
      $orderServices = OrderService::all();
      return OrderServiceResource::collection($orderServices);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResource
    {
      $orderService = OrderService::create($request->all());
      return new OrderServiceResource($orderService);
    }

    /**
     * Display the specified resource.
     */
    public function show($orderId): JsonResource
    {
        $orderServices = OrderService::where('order_id', $orderId)->get();

        return OrderServiceResource::collection($orderServices);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
      OrderService::destroy($id);
      return response()->json(['message' => 'Order deleted successfully'], 200);
    }
}
