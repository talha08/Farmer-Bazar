<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		DB::statement('SET FOREIGN_KEY_CHECKS=0');
		 $this->call('RolesTableSeeder');
		 $this->call('PermissionsTableSeeder');
		 $this->call('UsersTableSeeder');
		 $this->call('UserInfoTableSeeder');
		 $this->call('EntrustTableSeeder');
		 $this->call('CategoriesTableSeeder');
		 $this->call('CropsTableSeeder');
		 $this->call('ProductsTableSeeder');
		DB::statement('SET FOREIGN_KEY_CHECKS=0');
	}

}
