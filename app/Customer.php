<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['user_id','telephone', 'email', 'name'];


    public function form()
    {
    	return $this->hasMany(Form::class);
    }

    public function user()
    {
       return $this->hasOne(User::class);
    }

    public function addForm(Form $form, $userID)
    {
        $form->user_id = $userID;
        return $this->form()->save($form);

    }

}
