<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function profile($customerId) {
        $customer = Customer::where('id', $customerId)->firstOrFail();

	return view('customers.profile', ['customer' => $customer]);
    }

    public function save(Request $res) {
	$attributes = $this->validateData();
	dd($res->all());
    }

    public function validateData() {
	return request()->validate([
	    'full_name' => 'required',
	    'user_name' => 'required',
	    'address' => 'required',
	    'city' => 'required',
	    'country' => 'required',
	    'phone' => 'required',
	    'email' => 'email'
	]);
    }
}
