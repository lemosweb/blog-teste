<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => 'Daniel Lemos',
        'email' => 'daniel.o.lemos@hotmail.com',
        'password' => $password ?: $password = bcrypt('123456'),
        'remember_token' => str_random(10),
    ];
});

	$factory->define(App\Category::class, function (Faker\Generator $faker) {

		
		return [
				'name' => $faker->word,
				
		];
	});
	
		$factory->define(App\SubCategory::class, function (Faker\Generator $faker) {
			
			
			return [
					'name' => $faker->word,
					'category_id' => $faker->numberBetween(1,10)
					
			];
		});
		
		
			$factory->define(App\Article::class, function (Faker\Generator $faker) {
				
				
				return [


                    'titulo' => $faker->word,
                    'conteudo' => $faker->text,
                    'relevancia' => $faker->numberBetween(1,5),
                    'user_id' => 1,
                    'sub_category_id' => $faker->numberBetween(1,10),
                    
						
				];
			});
