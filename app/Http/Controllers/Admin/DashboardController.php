<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        return view("admin.pages.dashboard",[
            'clients' => User::where('role_as',0)->count(),
            'today_clients' => User::where('role_as',0)->whereDate('created_at', today())->count(),
            'monthly_clients' => User::where('role_as',0)->whereMonth('created_at', now()->month)->count(),
        ]);
    }
}
