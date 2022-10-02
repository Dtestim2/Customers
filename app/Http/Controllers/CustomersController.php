<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Customer;
use Illuminate\Support\Facades\DB;

class CustomersController extends Controller
{
    public function listCustomers()
    {
        $customersList = Customer::all();
        return view('Customer.list', ['listCustomers'=>$customersList]);
    }

    public function create()
    {
        return view('Customer.create');
    }

    public function store(Request $request)
    {
        Customer::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'cpf' => $request->cpf,
            'license_plate' => $request->license_plate,
        ]);

        $customersList = Customer::all();

        return view('Customer.list', ['listCustomers'=>$customersList]);
    }

    public function show($id)
    {
        $customer = Customer::findOrFail($id);
        return view('Customer.show', ['customer' => $customer]);
    }

    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('Customer.edit', ['customer' => $customer]);
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);

        $customer->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'cpf' => $request->cpf,
            'license_plate' => $request->license_plate,
        ]);

        $customersList = Customer::all();

        return view('Customer.list', ['listCustomers'=>$customersList]);
    }

    public function delete($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();

        $customersList = Customer::all();

        return view('Customer.list', ['listCustomers'=>$customersList]);
    }

    public function searchCustomers(Request $request)
    {
        $resultCustomers = [];
        $number = $request->number;
        $result = Customer::where("license_plate", "like", "%$number%")->get();

        foreach($result as $index => $customer){
            if(substr($customer->license_plate, -1) == $number){
                $resultCustomers[$index] = $customer;
            };
        }
//        dd($resultCustomers);

        return view('Customer.search', ['listSearchCustomers'=>$resultCustomers]);
    }
}
