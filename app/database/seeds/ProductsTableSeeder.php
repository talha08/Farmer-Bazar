<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Product::create([
				'product_name'=> $faker->word,
				'details'=>$faker->paragraph,
				'picture' => null,
				'min_price'=>$faker->randomDigit,
				'max_price'=>$faker->randomDigitNotNull,
				'crop_id'=>1,
				'location' =>$faker->country,
				'expiry_date'=>$faker->date('Y--m-d'),
				//'category_id' =>1,

			]);
		}
	}

}