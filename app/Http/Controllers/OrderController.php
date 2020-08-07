<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::all();
        return view('order.index', compact('orders'));
    }
    public function create(){
        return view('order.create');
    }
    public function store(Request $request){
        $slug= uniqid();
        $order = new Order(array(
            'customer_id' => $request->get('customer_id'),
            'product_id' => $request->get('product_id'),
            'amount' => $request->get('amount'),
            'status' => $request->get('status'),
        ));
        $order->save();
        return redirect('order')->with('status','Your order has been create! Its unique id is :'.$slug);
    }
    public function show($id){
        $order = Order::whereId($id)->firstOrFail();
        return view('order.show', compact('order'));
    }
    public function edit($id){
        $order = Order::whereId($id)->firstOrFail();
        return view('order.edit', compact('order'));
    }
    public function update(Request $request, $id){
        $order = Order::whereId($id)->firstOrFail();
        $order->customer_id = $request->get('customer_id');
        $order->product_id = $request->get('product_id');
        $order->amount = $request->get('amount');
        $order->status = $request->get('status');
        $order->save();
        return redirect(action('OrderController@edit', $order->id))->with('status','Your Order '.$id. ' has been update !');
    }
    public function destroy($id){
        $order = Order::whereId($id)->firstOrFail();
        $order->delete();
        return redirect('/order')->with('status','Your Order'.$id.'has been delete!');
    }
}
