<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class OnlineDiet extends Model
{
    use SoftDeletes;
    protected $fillable=['ad','soyad','telefon','cinsiyet','meslek','yas','boy','kilo','hedef_kilo','email'];
    protected $table="online_diet";

    public function cinsyt() {
        return $this->hasOne('App\Models\Cinsiyet', 'id', 'cinsiyet');
    }
}
