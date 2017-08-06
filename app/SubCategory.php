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

    public function getListagem()
    {
        
        return $this                                   
                  ->leftjoin('categories AS c', 'c.id', '=', 'category_id')
                  ->select('sub_categories.id',
                           'sub_categories.name',             
                           'c.name AS category'                        
                         )
                  ->get();

    }
    
    
}    
