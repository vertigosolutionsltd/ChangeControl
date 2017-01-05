<?php

namespace App\Http\Controllers;

use App\Customer;
use App\User;
use App\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{
	/**
	* Create new controller instance
	*
	*/
	
	public function details(Form $form)
	{
		$form->load('customer');
		return view('forms.show', compact('form'));
	}

	public function add(Customer $customer)
	{

		$customers = $customer::all();
		return view('forms.add', compact('customers'));
	}

	public function edit(Form $form)
	{
		$form->load('customer');
		return view('forms.edit', compact('form'));
	}

	public function insert(Request $request, Customer $customer) 
	{

		//Create an Array so we can convert this to JSON
		$answers = array(
				'answer1' => $request->a1,
				'answer2' => $request->a2,
				'answer3' => $request->a3,
				'answer4' => $request->a4,
				'answer5' => $request->a5,
				'answer6' => $request->a6,
				'answer7' => $request->a7,
				'answer8' => $request->a8,
				'answer9' => $request->a9,
				'answer10' => $request->a10,
				'answer11' => $request->a11
		);

		$data = [
		'user_id' => Auth::id(),
		'customer_id' => $request->customer_id,
			'subject' => $request->subject,
			'answers' => json_encode($answers),
			'feedback' => $request->feedback
		];


		//$cc = new Form;
		// $cc->create($data);
	  //alert('success', 'Change control form added!');
		// return back();

	  $form = new Form($data);
	  // $customer->addForm($form, Auth::id());
	  // // var_dump($form);
	  $form->save();
	  alert('success', 'Change control form added!');
	  return back();


	}

}
