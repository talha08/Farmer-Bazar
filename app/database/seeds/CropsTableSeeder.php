<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CropsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Crop::create([

				'crop_name' => $faker->word,
				'category_id'=> 1,

			]);
		}
	}

}