<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function create()
    {
        $customer = new Customer();
        $url = url('/customer');
        $data = compact('url', 'customer');
        return view('customer')->with($data);
    }
    public function store(Request $request)
    {
        //insert query
        // printArray($request->all());
        // die;
        $customer = new Customer;
        $customer->name = $request['name'];
        $customer->address = $request['address'];
        $customer->phonenumber = $request['phonenumber'];
        $customer->dob = $request['dob'];
        $customer->password = md5($request['password']);
        $customer->save();
        return redirect('/customer');
    }
    public function view(Request $request)
    {
        $search = $request['search'] ?? "";
        if ($search != "") {
            $customers = Customer::where('name', 'LIKE', "$search%")->orWhere('phonenumber', 'LIKE', "$search%")->get();
        } else {
            $customers = Customer::paginate(10);
        }
        $data = compact('customers', 'search');
        return view('customer-view')->with($data);
    }
    public function viewTrash()
    {
        $customers = Customer::onlyTrashed()->get();
        return view('customer-trash', compact('customers'));
    }

    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return redirect()->route('customer.view');
    }

    public function forceDelete($id)
    {
        $customer = Customer::withTrashed()->findOrFail($id);
        $customer->forceDelete();
        return redirect('/customer');
    }

    public function restore($id)
    {
        $customer = Customer::withTrashed()->findOrFail($id);
        $customer->restore();
        return redirect('/customer');
    }
    public function delete($id)
    {
        $customer = Customer::find($id);
        if (!is_null($customer)) {
            $customer->delete();
        }
        return redirect('customer');
    }
    public function edit($id)
    {
        $customer = Customer::find($id);
        if (is_null($customer)) {
            return redirect('customer');
        } else {
            $url = url('/customer/update') . "/" . $id;
            $data = compact('customer', 'url');
            return view('customer')->with($data);
        }
    }
    public function update($id, Request $request)
    {
        $customer = new Customer;
        $customer->name = $request['name'];
        $customer->address = $request['address'];
        $customer->phonenumber = $request['phonenumber'];
        $customer->dob = $request['dob'];
        $customer->password = md5($request['password']);
        $customer->save();
        return redirect('/customer');
    }
}
