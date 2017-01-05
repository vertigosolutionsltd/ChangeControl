<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{

	protected $fillable = ['user_id', 'customer_id','subject', 'answers', 'feedback'];

	//Assign a customer to a form
    public function customer()
    {
	
		return $this->belongsTo(Customer::class);
	
    }

    public function user() 
    {

        return $this->belongsTo(User::class);

    }

}
