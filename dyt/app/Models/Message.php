<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use SoftDeletes;
    protected $table="message";
    protected $fillable=['name','email','subject','content'];


}
