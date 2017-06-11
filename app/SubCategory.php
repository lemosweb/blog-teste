<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubCategory extends Model
{
	
	use SoftDeletes;
	
    protected $fillable = [
    		'name',
    		'category_id',
    ];
    
    public function category()
    {
    	return $this->belongsTo(Category::class);
    }
    
    public function articles()
    {
    	return $this->hasMany(Article::class);
    }
    
    
}    
