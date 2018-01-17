<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| database. Just tell the factory how a default model should look.
| you a convenient way to create models for testing and seeding your
|
*/
/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\User::class, function (Faker\Generator $faker) {

    static $password;
    return [
      'email' => 'daniel.o.lemos@hotmail.com',
        'name' => 'Daniel Lemos',
        'password' => $password ?: $password = bcrypt('123456'),
        'role' => 'admin',
        'remember_token' => str_random(10),
    ];
});

	$factory->define(Domain\Category\Category::class, function (Faker\Generator $faker) {


		return [

				'name' => $faker->word,

		];
	});

		$factory->define(Domain\SubCategory\SubCategory::class, function (Faker\Generator $faker) {


			return [
					'name' => $faker->word,
					'category_id' => $faker->numberBetween(1,10)

			];
		});


			$factory->define(Domain\Article\Article::class, function (Faker\Generator $faker) {


				return [


                    'title' => $faker->word,
                    'relevance' => $faker->numberBetween(1,5),
                    'content' => $faker->text,
                    'user_id' => 1,
                    'sub_category_id' => $faker->numberBetween(1,10),


				];
			});
