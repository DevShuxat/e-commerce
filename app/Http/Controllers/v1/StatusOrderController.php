<?php

namespace App\Http\Controllers\v1;

use App\Http\Requests\ChangeOrderStatusRequest;
use App\Models\Order;
use App\Models\Status;
use App\Models\StatusOrder;
use Illuminate\Http\Request;

class StatusOrderController extends Controller
{
    public function index()
    {
        return StatusOrder::all();

    }

    public function store(Status $status, ChangeOrderStatusRequest $request)
    {

//        dd($status, $request);
        $order = Order::findOrFail($request['order_id']);

        $order->update(['status_id' => $status->id]);

        return $this->success('success change order', $order);
    }

}
