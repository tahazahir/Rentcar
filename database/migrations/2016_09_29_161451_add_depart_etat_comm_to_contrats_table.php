<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDepartEtatCommToContratsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('contrats', function(Blueprint $table)
		{
			$table->text('depart_etat_comm');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('contrats', function(Blueprint $table)
		{
			$table->dropColumn('depart_etat_comm');
		});
	}

}
