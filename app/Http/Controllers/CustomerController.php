<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index() {
        $customers = Customer::all();
        return view('index',compact('customers'));
    }
    public function create() {
        return view('create');
    }
    public function store(Request $request) {
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->age = $request->age;
        $customer->save();
        return redirect()->route('index');
    }
    public function show($id) {
        $customer = Customer::findOrFail($id);
        return view('show',compact('customer'));
    }
    public function edit($id) {
        $customer = Customer::findOrFail($id);
        return view('edit',compact('customer'));
    }
    public function update(Request $request,$id) {
        $customer = Customer::findOrFail($id);
        $customer->name = $request->name;
        $customer->age = $request->age;
        $customer->save();
        return redirect()->route('index');
    }
    public function destroy($id) {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return redirect()->route('index');
    }
}
