<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reservations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('car_id')->unsigned();
			$table->foreign('car_id')->references('id')->on('cars');
			$table->integer('client_id')->unsigned();
			$table->foreign('client_id')->references('id')->on('clients');
			$table->date('depart_date');
			$table->date('return_date');
			$table->string('depart_place');
			$table->string('return_place');
			$table->double('price',10,2);
			$table->integer('nbdayrent');
			$table->double('advance',10,2);
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
		Schema::drop('reservations');
	}

}
