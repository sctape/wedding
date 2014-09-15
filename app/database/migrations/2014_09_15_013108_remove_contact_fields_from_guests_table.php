<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class RemoveContactFieldsFromGuestsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('guests', function(Blueprint $table)
		{
			$table->dropColumn('address');
			$table->dropColumn('address2');
			$table->dropColumn('address3');
			$table->dropColumn('email');
			$table->dropColumn('city');
			$table->dropColumn('state');
			$table->dropColumn('zip');
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
            $table->string('email');
            $table->string('address');
            $table->string('address2')->nullable();
            $table->string('address3')->nullable();
            $table->string('city');
            $table->string('state');
            $table->integer('zip');
		});
	}

}
