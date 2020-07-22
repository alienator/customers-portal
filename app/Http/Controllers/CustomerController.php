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
}
