<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Customer;
use App\User;
class CustomerController extends Controller {
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
        return request()->validate(['full_name' => 'required', 'address' => 'required', 'city' => 'required', 'country' => 'required', 'phone' => 'required', 'user' => '']);
    }
    public function orders(Customer $customer) {
        return view('customers.orders', compact('customer'));
    }
    public function store() {
        $validAttributes = $this->validateData();
        $user = User::create($validAttributes['user']);
        $validAttributes['user_id'] = $user->id;
        unset($validAttributes['user']);
        $customer = Customer::create($validAttributes);
    }
}
