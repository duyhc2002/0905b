<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;
use Hash;
use Session;

class CustomerController extends Controller
{
    public function register()
    {
        return view('0905b.register');
    }

    public function login()
    {
        return view('0905b.login');
    }

    public function registerProcess(Request $request)
    {
        $customer = new Customer();
        $customer->customersID = $request->username;
        $customer->customersPass = Hash::make($request->password);
        $customer->customersFullname = $request->fullname;
        $customer->customersEmail = $request->email;
        $customer->customersPhone = $request->phone;
        $res = $customers->save();
        if($res) {
            return back()->with('success', 'You have registered successfully!');
        } else {
            return back()->with('fail', 'Oh No! Something wrong!!!');
        }
    }

    public function loginProcess(Request $request)
    {
        $customers = Customers::where('customersID', '=', $request->email)->first();
        if($customers) {
            if(Hash::check($request->password, $customers->customersPass)) {
                $request->session()->put('loginID', $customers->customersID);
                return redirect('products');
            } else {
                return back()->with('fail', 'Password not matches!!!');
            } 
        } else {
            return back()->with('fail', 'This email does not registered!!!');
        }
    }

    public function logout()
    {
        if(Session::has('loginID')) {
            Session::pull('loginID');
            return redirect('login');
        }
    }

}