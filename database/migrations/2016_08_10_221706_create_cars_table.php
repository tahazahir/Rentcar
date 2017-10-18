<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cars', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('marque');
			$table->string('model');
			$table->string('immatricule')->unique();
			$table->string('color');
			$table->integer('price');
			$table->date('circulation_date');
			$table->integer('rent_price');
			$table->integer('km');
			$table->string('carburant');
			$table->string('transformation');
			$table->boolean('gps');
			$table->boolean('clim');
			$table->boolean('visible');
			$table->boolean('promotion');
			$table->string('picture');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cars');
	}

}
