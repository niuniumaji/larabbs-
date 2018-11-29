<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = [
        'name', 'description',
    ];

    //category—— 一个话题属于一个分类；
    public function topic()
    {
    	return $this->hasMany(Topic::class);
    }
}
