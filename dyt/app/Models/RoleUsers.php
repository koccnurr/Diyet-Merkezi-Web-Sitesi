<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class RoleUsers extends Model {
    use SoftDeletes;

    protected $table = "role_users";
    public function usersroles()
    {
        return $this->hasOne('App\Models\Users','id','user_id');
    }
    

}