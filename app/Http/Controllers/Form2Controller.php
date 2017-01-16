<?php

namespace App\Http\Controllers;

use App\Customer;
use App\User;
use App\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Form2Controller extends Controller
{

	/**
	*
	* Build
	* Ensure user is logged in
	*/

	public function __construct()
	{
		$this->middleware('auth');
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param \App\Form $form 
	 * 
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request, Form $form)
	{
		$limit = $request->input('limit');
		if ($limit == 'all')
		{
			$forms = Form::all();
		}
		else
		{
			$forms = Form::paginate($limit);
		}

		return view('forms.index', compact('forms'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @param \App\Customer $customer
	 * 
	 * @return \Illuminate\Http\Response
	 */
	public function create(Customer $customer)
	{
		$customers = $customer::all();
		return view('forms.create', compact('customers'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \App\Fustomer $customer
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request, Customer $customer)
	{
		// @todo - validation

		//Create an Array of teh answers
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

		//Assign data to table fields

		$data = [
		'user_id' => Auth::id(),
		'customer_id' => $request->customer_id,
			'subject' => $request->subject,
			'answers' => json_encode($answers), //Convert answers to json
			'feedback' => $request->feedback
		];

		$form = new Form($data);
		$form->save();
		alert('success', 'Change control form added!');
		return back();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Form $form
	 * @return \Illuminate\Http\Response
	 */
	public function show(Form $form)
	{
		$form->load('customer');
		return view('forms.show', compact('form'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Form $form
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Form $form)
	{
		$form->load('customer');
		return view('forms.edit', compact('form'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Form  $form
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Form $form)
	{
		return "Can't do that yet.. Hold your horses.";
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Form $form
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Form $form)
	{
		return "Can't do that yet.. Hold your horses.";
	}
}
