<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('clients');
		Schema::create('clients', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('address_1');
			$table->string('address_2')->nullable();
			$table->string('town');
			$table->string('postcode');
			$table->string('weburl')->nullable();
			$table->string('phone');
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
		Schema::dropIfExists('clients');
	}

}
