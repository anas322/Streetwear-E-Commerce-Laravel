<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Order;
use App\Http\Controllers\Controller;
use Asantibanez\LivewireCharts\Models\PieChartModel;
use Asantibanez\LivewireCharts\Models\AreaChartModel;

class DashboardController extends Controller
{
    public function index(){

        $orders = Order::all()->pluck('total_price')->toArray();
        $orders_date = Order::all()->pluck('created_at')->map(function ($order) {
            return $order->isoFormat('MMM Do YY');
        })->toArray();

        $earningsChartModel = (new AreaChartModel());

        foreach ($orders as $order) {
            $earningsChartModel->addPoint('Earning', $order);
        }

        $earningsChartModel->setXAxisCategories($orders_date)->setSmoothCurve()
        ->setAnimated(true);


        $order_slices = Order::all()->groupBy('status')->map(function ($order) {
            return $order->count();
        })->toArray();

        
        $ordersChartModel = (new PieChartModel())
            ->setAnimated(true)
            ->setOpacity(0.90)
            ->addColor('#808080')
            ->addColor('#00A7B3')
            ->addColor('#0E2238')
            ->addColor('#FF0000');

        foreach ($order_slices as $key => $value) {
            if($key == 'returned'){
                $ordersChartModel->addSlice($key, $value, '#808080');
            }elseif($key == 'delivered'){
                $ordersChartModel->addSlice($key, $value, '#00A7B3');
            }elseif($key == 'pending'){
                $ordersChartModel->addSlice($key, $value, '#0E2238');
            }else{
                $ordersChartModel->addSlice($key, $value, '	#FF0000');
            }
        }

        $latest_orders = Order::latest()->take(5)->get();

        return view("admin.pages.dashboard",[
            'clients_count' => User::where('role_as',0)->count(),
            'today_clients_count' => User::where('role_as',0)->whereDate('created_at', today())->count(),
            'monthly_clients_count' => User::where('role_as',0)->whereMonth('created_at', now()->month)->count(),

            'orders_count' => Order::count(),
            'today_orders_count' => Order::whereDate('created_at', today())->count(),
            'monthly_orders_count' => Order::whereMonth('created_at', now()->month)->count(),

            'total_earning' => Order::sum('total_price'),
            'today_earning' => Order::whereDate('created_at', today())->sum('total_price'),
            'monthly_earning' => Order::whereMonth('created_at', now()->month)->sum('total_price'),

            'earningsChartModel' => $earningsChartModel,
            'ordersChartModel' => $ordersChartModel,

            'latest_orders' => $latest_orders,
        ]);
    }
}
