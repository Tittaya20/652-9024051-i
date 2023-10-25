<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index(){
        $customers = Customer::orderBy('id', 'DESC')->paginate(5);
        return view('customer.index',compact('customers'));
    }
    public function create(){
        return view('customer.create');
    }
    public function store(Request $request){
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'phone_no' => 'required',
            'password' => 'required',
        ]);
        Customer::create($request->post());

        return redirect()->route('customer.index')->with('success','Customer has been added');
    }
    public function show(Customer $customer){
        return view('customer.show',compact('customer'));
    }

    public function edit(Customer $customer){
        return view('customer.edit',compact('customer'));
    }
    public function update(Request $request,Customer $customer){
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'phone_no' => 'required',
            'password' => 'required',
        ]);
        $customer->fill($request->post())->save();

        return redirect()->route('customer.index')->with('success','Customer has been updated');
    }
    public function destroy(Customer $customer){
        $customer->delete();
        return redirect()->route('customer.index')->with('success','Customer has been deleted');
    }
}
