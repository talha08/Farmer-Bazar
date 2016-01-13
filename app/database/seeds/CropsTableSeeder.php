<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CropsTableSeeder extends Seeder {
/*
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

*/
	public function run()
	{
		$crops = [
					[
								'crop_name' => 'ধান',
				                'category_id'=> 1,
								'created_at' => date('Y-m-d H:i:s'),
								'updated_at' => date('Y-m-d H:i:s')
					],
					[
								'crop_name' => 'গম',
				                'category_id'=> 1,
								'created_at' => date('Y-m-d H:i:s'),
								'updated_at' => date('Y-m-d H:i:s')
					],
					[
								'crop_name' => 'পাট',
				                'category_id'=> 1,
								'created_at' => date('Y-m-d H:i:s'),
								'updated_at' => date('Y-m-d H:i:s')
					],
					[
								'crop_name' => 'আলু',
				                'category_id'=> 1,
								'created_at' => date('Y-m-d H:i:s'),
								'updated_at' => date('Y-m-d H:i:s')
					],
					[
								'crop_name' => 'চা',
				                'category_id'=> 1,
								'created_at' => date('Y-m-d H:i:s'),
								'updated_at' => date('Y-m-d H:i:s')
					],
					[
								'crop_name' => 'সরিষা',
				                'category_id'=> 4,
								'created_at' => date('Y-m-d H:i:s'),
								'updated_at' => date('Y-m-d H:i:s')
					],
					[
								'crop_name' => 'তিল ',
				                'category_id'=> 3,
								'created_at' => date('Y-m-d H:i:s'),
								'updated_at' => date('Y-m-d H:i:s')
					],
					[
								'crop_name' => 'বাঁধাকপি ',
				                'category_id'=> 2,
								'created_at' => date('Y-m-d H:i:s'),
								'updated_at' => date('Y-m-d H:i:s')
					],
					[
								'crop_name' => 'ফুলকপি ',
				                'category_id'=> 2,
								'created_at' => date('Y-m-d H:i:s'),
								'updated_at' => date('Y-m-d H:i:s')
					],
					[
								'crop_name' => 'নারিকেল ',
				                'category_id'=> 3,
								'created_at' => date('Y-m-d H:i:s'),
								'updated_at' => date('Y-m-d H:i:s')
					],
					[
								'crop_name' => 'কমলা ',
				                'category_id'=> 3,
								'created_at' => date('Y-m-d H:i:s'),
								'updated_at' => date('Y-m-d H:i:s')
					],
					[
								'crop_name' => 'আপেল',
				                'category_id'=> 3,
								'created_at' => date('Y-m-d H:i:s'),
								'updated_at' => date('Y-m-d H:i:s')
					],
					
					

		];

		DB::table('crops')->insert($crops);
	}



}