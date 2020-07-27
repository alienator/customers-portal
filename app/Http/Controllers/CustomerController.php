<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function edit($customerId) {
        $customer = Customer::where('id', $customerId)->firstOrFail();

	return view('customers.profile', ['customer' => $customer]);
    }

    public function update(Customer $customer) {
	$attributes = $this->validateData();
	$customer->update($attributes);
	$customer->save();

	return redirect('/customers/' . $customer->id);
    }

    public function validateData() {
	return request()->validate([
	    'full_name' => 'required',
	    'user_name' => 'required',
	    'address' => 'required',
	    'city' => 'required',
	    'country' => 'required',
	    'phone' => 'required',
	    'email' => 'required',
//	    'user_password' => 'required'
	]);
    }

    public function orders(Customer $customer) {
	return view('customers.orders', compact('customer'));
    }
}
