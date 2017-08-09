<?php

namespace Domain\Category;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Domain\SubCategory;

class Category extends Model
{

	use SoftDeletes;

    protected $fillable = [

    		'name'

    ];

    public function subCategories()
    {
    	return $this->hasMany(SubCategory::class);
    }



}
