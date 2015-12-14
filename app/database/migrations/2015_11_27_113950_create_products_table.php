<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('product_name');
			$table->text('details')->nullable();
			$table->string('picture')->nullable();
			$table->string('min_price');
			$table->string('max_price');
			$table->integer('user_id')->unsigned();
			$table->integer('crop_id')->unsigned();
			$table->float('long');
			$table->float('lat');

			$table->string('location');
			$table->date('expiry_date');

		//	$table->integer('category_id')->unsigned();
		//	$table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
			$table->timestamps();

			$table->foreign('user_id')->references('id')->on('crops')->onUpdate('cascade')->onDelete('cascade');
			$table->foreign('crop_id')->references('id')->on('crops')->onUpdate('cascade')->onDelete('cascade');
		});
	}



	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products');
	}

}
