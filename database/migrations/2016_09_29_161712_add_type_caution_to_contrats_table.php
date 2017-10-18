<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTypeCautionToContratsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('contrats', function(Blueprint $table)
		{
			$table->string('type_caution');
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
			$table->dropColumn('type_caution');
		});
	}

}
