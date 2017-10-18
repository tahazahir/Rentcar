<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConductorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('conductors', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('firstname',20);
			$table->string('lastname',20);
			$table->date('birth_date');
			$table->string('cin',15)->unique();
			$table->string('permis',15)->unique();
			$table->string('passport',20)->unique();
			$table->string('email')->unique();
			$table->text('adresse');
			$table->string('city',15);
			$table->string('birth_city',15);
			$table->string('tel',20);
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
		Schema::drop('conductors');
	}

}
