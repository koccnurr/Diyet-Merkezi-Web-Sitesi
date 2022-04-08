<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model {
    use SoftDeletes;
        use Sluggable;

    protected $table = "blog";
    protected $fillable = ['blog_icerik', 'blog_baslik','image','blog_slug'];
 public function sluggable() {
        return [
            'blog_slug' => [
                'source' => 'blog_baslik',
            ],
        ];
    }
}
