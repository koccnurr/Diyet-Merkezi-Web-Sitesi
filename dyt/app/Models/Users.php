<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cartalyst\Sentinel\Users\EloquentUser;



class Users extends EloquentUser {
	use SoftDeletes;
	protected $table = 'users';
	protected $fillable=['email','first_name','last_name','password','role_id'];
	public function usroles()
	{
		return $this->belongsToMany('App\Models\Role', 'role_users', 'user_id', 'role_id');
	}
}