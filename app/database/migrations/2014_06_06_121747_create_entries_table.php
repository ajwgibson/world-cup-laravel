<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('entries', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('email', 100);
			$table->string('secret', 64);

			$table->string('confirmation', 25)->nullable();

			$table->string('first_name', 100);
			$table->string('last_name', 100);

			$table->integer('score')->unsigned()->default(0);

			$table->string('ga_1', 30)->nullable();
			$table->string('ga_2', 30)->nullable();
			$table->string('ga_3', 30)->nullable();
			$table->string('ga_4', 30)->nullable();

			$table->string('gb_1', 30)->nullable();
			$table->string('gb_2', 30)->nullable();
			$table->string('gb_3', 30)->nullable();
			$table->string('gb_4', 30)->nullable();

			$table->string('gc_1', 30)->nullable();
			$table->string('gc_2', 30)->nullable();
			$table->string('gc_3', 30)->nullable();
			$table->string('gc_4', 30)->nullable();

			$table->string('gd_1', 30)->nullable();
			$table->string('gd_2', 30)->nullable();
			$table->string('gd_3', 30)->nullable();
			$table->string('gd_4', 30)->nullable();

			$table->string('ge_1', 30)->nullable();
			$table->string('ge_2', 30)->nullable();
			$table->string('ge_3', 30)->nullable();
			$table->string('ge_4', 30)->nullable();

			$table->string('gf_1', 30)->nullable();
			$table->string('gf_2', 30)->nullable();
			$table->string('gf_3', 30)->nullable();
			$table->string('gf_4', 30)->nullable();

			$table->string('gg_1', 30)->nullable();
			$table->string('gg_2', 30)->nullable();
			$table->string('gg_3', 30)->nullable();
			$table->string('gg_4', 30)->nullable();

			$table->string('gh_1', 30)->nullable();
			$table->string('gh_2', 30)->nullable();
			$table->string('gh_3', 30)->nullable();
			$table->string('gh_4', 30)->nullable();

			$table->string('f16_1',  30)->nullable();
			$table->string('f16_2',  30)->nullable();
			$table->string('f16_3',  30)->nullable();
			$table->string('f16_4',  30)->nullable();
			$table->string('f16_5',  30)->nullable();
			$table->string('f16_6',  30)->nullable();
			$table->string('f16_7',  30)->nullable();
			$table->string('f16_8',  30)->nullable();
			$table->string('f16_9',  30)->nullable();
			$table->string('f16_10', 30)->nullable();
			$table->string('f16_11', 30)->nullable();
			$table->string('f16_12', 30)->nullable();
			$table->string('f16_13', 30)->nullable();
			$table->string('f16_14', 30)->nullable();
			$table->string('f16_15', 30)->nullable();
			$table->string('f16_16', 30)->nullable();

			$table->string('f8_1', 30)->nullable();
			$table->string('f8_2', 30)->nullable();
			$table->string('f8_3', 30)->nullable();
			$table->string('f8_4', 30)->nullable();
			$table->string('f8_5', 30)->nullable();
			$table->string('f8_6', 30)->nullable();
			$table->string('f8_7', 30)->nullable();
			$table->string('f8_8', 30)->nullable();

			$table->string('f4_1', 30)->nullable();
			$table->string('f4_2', 30)->nullable();
			$table->string('f4_3', 30)->nullable();
			$table->string('f4_4', 30)->nullable();

			$table->string('f2_1', 30)->nullable();
			$table->string('f2_2', 30)->nullable();

			$table->string('winner', 30)->nullable();

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
		Schema::drop('entries');
	}

}
