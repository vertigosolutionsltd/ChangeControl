<?php

namespace App\Http\Controllers;

use App\User;
use App\Form;
use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    //
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function index(Request $request)
    {
        $limit = $request->input('limit');
        $customers = Customer::paginate($limit);
        //$customers = Customer::all();
		return view('customers.index', compact('customers'));    	

    }

    public function details(Customer $customer)
    {

        $customer->load('form.user');
        return view('customers.details', compact('customer'));
    }

    public function add()
    {
    	return view('customers.add');

    }


    public function insert(Request $request)
    {

    	$data = [
    		'telephone' => $request->telephone,
    		'email' => $request->email, 
    		'user_id' => Auth::id(),
    		'name' => $request->name
    	];

    	$customer = new Customer;

   		$customer->create($data);
   		alert('success', 'Customer Added!');
   		return back();
    }

}
