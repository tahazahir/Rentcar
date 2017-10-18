<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDepartHourToReservationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('reservations', function(Blueprint $table)
		{
			$table->string('depart_hour');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('reservations', function(Blueprint $table)
		{
			$table->dropColumn('depart_hour');
		});
	}

}
