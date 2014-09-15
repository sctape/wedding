<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddInviteIdToGuestsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('guests', function(Blueprint $table)
		{
			$table->integer('invite_id')->index();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('guests', function(Blueprint $table)
		{
			$table->dropColumn('invite_id');
		});
	}

}
