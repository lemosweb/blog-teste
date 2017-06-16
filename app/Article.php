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
    	return DB::table('articles')
                  ->leftjoin('sub_categories', 'articles.sub_category_id', '=', 'sub_categories.id')
                  ->leftjoin('categories', 'categories.id', '=', 'sub_categories.category_id')
                  ->leftjoin('users', 'users.id', '=', 'articles.user_id')
                  ->select('articles.titulo', 'users.name')
                  ->get();


    }
    
    
}
