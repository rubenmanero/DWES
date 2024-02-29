<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function showForm(){
        $employees = Employee::all();
        $products = Product::all();
        return view('order.form', ['employees'=>$employees, 'products'=>$products]);
    }

    public function showResume(Request $r){
        $employee = Employee::find($r->employee_id);
        $product = Product::find($r->product);
        $amount = $r->cantidad;
        return view('order.resume', ['employee'=>$employee, 'product'=>$product, 'amount'=>$amount]);
    }
}
