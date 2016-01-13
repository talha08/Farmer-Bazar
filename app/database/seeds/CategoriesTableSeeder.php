<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder {
/*
	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Category::create([
				'name'=>$faker->word,
			]);
		}
	}
*/

	public function run()
	{
		$categories = [
					[
								'name'=>'ফসল',
								'created_at' => date('Y-m-d H:i:s'),
								'updated_at' => date('Y-m-d H:i:s')
					],
					[
								'name'=>'শাক-সব্জি',
								'created_at' => date('Y-m-d H:i:s'),
								'updated_at' => date('Y-m-d H:i:s')
					],
					[
								'name'=>'ফল-মূল',
								'created_at' => date('Y-m-d H:i:s'),
								'updated_at' => date('Y-m-d H:i:s')
					],
					[
								'name'=>'মসলা',
								'created_at' => date('Y-m-d H:i:s'),
								'updated_at' => date('Y-m-d H:i:s')
					]
					

		];

		DB::table('categories')->insert($categories);
	}

}