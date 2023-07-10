<?php

namespace App\Http\Controllers\v1;

use App\Models\DeliveryMethod;
use App\Models\Order;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\LazyCollection;

class StatsController extends Controller
{

    public function ordersCount(Request $request)
    {
        $from = Carbon::now()->subMonth();
        $to = Carbon::now();


        if ($request->has(['from', 'to'])) {
            $from = $request->from;
            $to = $request->to;
        }

        return $this->response(
            Order::query()
                ->whereBetween('created_at', [$from, Carbon::parse($to)->endOfDay()])
                ->whereRelation('status', 'code', 'C')
                ->count()
        );
    }

    public function ordersSum()
    {
        return $this->response(
            Order::query()
                ->where('created_at', '>=', Carbon::now()->subMonth())
                ->whereRelation('status', 'code', 'C')
                ->sum('sum')
        );
    }

    public function deliveryMethodsRatio(Request $request)
    {

//        if (Cache::has('deliveryMethodsRatio')){
//            return Cache::get('deliveryMethodsRation');
//        }
        $from = Carbon::now()->subMonth();
        $to = Carbon::now();

        if ($request->has(['from', 'to'])) {
            $from = $request->from;
            $to = $request->to;
        }

        $response = [];

        $allOrders = Order::query()
            ->whereBetween('created_at', [$from, Carbon::parse($to)->endOfDay()])
            ->whereRelation('status', 'code', 'C')
            ->count();
//        dd($allOrders);

        foreach (DeliveryMethod::all() as $deliveryMethod) {
            $deliveryMethodOrders = $deliveryMethod->orders()
                ->whereBetween('created_at', [$from, Carbon::parse($to)->endOfDay()])
                ->whereRelation('status', 'code', 'C')
                ->count();

            $response[] = [
                'name' => $deliveryMethod->getTranslations('name'),
                'percentage' => round($deliveryMethodOrders * 100 / $allOrders, 1),
                'amount' => $deliveryMethodOrders,
            ];
        }

//        Cache::put('deliveryMethodsRation', $response, Carbon::now()->addDay());
        return $this->response($response);
    }



}
