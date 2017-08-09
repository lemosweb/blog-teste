<?php

namespace Domain\Article;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Domain\Subcategory\Subcategory;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\User;

class Article extends Model
{
	use SoftDeletes;

    protected $fillable = [

    		'titulo',
				'id',
    		'conteudo',
    		'relevancia',
				'created_at',
				'user_id',
    		'sub_category_id'
    ];



    public function user()
		{
    	return $this->belongsTo(User::class);
    }

    public function subCategory()
    {
    	return $this->belongsTo(SubCategory::class);
    }

    public function getListagem()
    {

    	return $this
                  ->leftjoin('sub_categories AS sc', 'sub_category_id', '=', 'sc.id')
                  ->leftjoin('categories AS c', 'c.id', '=', 'sc.category_id')
                  ->leftjoin('users AS u', 'u.id', '=', 'user_id')
                  ->select('titulo',
                  		   'u.name AS autor',
                  		   'c.name AS categoria',
                  		   'sc.name AS subcategoria'
                         )
                  ->get();

    }






}
