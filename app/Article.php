<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
	use SoftDeletes;
	
    protected $fillable = [
    
    		'id',
    		'titulo',
    		'conteudo',
    		'relevancia',
    		'user_id',
    		'sub_category_id',    		
    		'created_at'
    
    ];
    
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
    
    public function subCategory()
    {
    	return $this->belongsTo(SubCategory::class);
    }
    
    
}
