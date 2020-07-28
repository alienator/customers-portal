<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Order;

class OrderController extends Controller
{
    public function validateAttributes() {
	return request()->validate([
	    'customer_id' => 'required',
	    'total' => 'required',
	    'status' => 'required'
	]);
    }
    
    public function store() {
	$validAttributes = $this->validateAttributes();

	Order::create($validAttributes);

	return redirect('/orders');
    }

    public function update(Order $order) {
	$validAttributes = $this->validateAttributes();

	$order->update($validAttributes);

	return redirect('/orders/' . $order->id);
    }

    public function get(Order $order) {
	$customer = $order->customer;
	return view('orders.get',
		    [
			'order' => $order,
			'customer' => $customer
		    ]
		    );
    }

    public function index() {
	$orders = Order::all();

	return view('orders.index', compact('orders'));
    }

}
