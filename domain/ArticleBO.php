<?php

namespace Domain;


use App\Article;

class ArticleBO
{
	
	
	public function getListagem()
	{
		return (new Article())->find(1);
	}
}