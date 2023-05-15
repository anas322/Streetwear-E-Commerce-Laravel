<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Order;

class DashboardController extends Controller
{
    public function index(){
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
        ]);
    }
}
