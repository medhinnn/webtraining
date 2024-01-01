<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyAccountController extends Controller
{
    //
    public function orders()
    {
        $viewData = [];
        $viewData["title"] = "order - Online Store";
        $viewData["subtitle"] = "List of orders";
        $viewData["orders"] = Order::where('user_id', Auth:: user()->id)->get();
        return view('myaccount.orders')->with("viewData", $viewData);
    }
}
