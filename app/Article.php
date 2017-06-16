<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
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
    
    public function getListagemDeArtigos()
    {
    	
    	return $this
                  ->leftjoin('sub_categories AS sc', 'sub_category_id', '=', 'sc.id')
                  ->leftjoin('categories AS c', 'c.id', '=', 'sc.category_id')
                  ->leftjoin('users AS u', 'u.id', '=', 'user_id')
                  ->select('titulo',
                  		   'u.name AS usuario',
                  		   'c.name AS categoria',
                  		   'sc.name AS subcategoria')
                  ->get();

    }
    
    
}
