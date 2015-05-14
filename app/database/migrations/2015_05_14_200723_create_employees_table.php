<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('employees');
		Schema::create('employees', function(Blueprint $table)
		{
			$table->increments('id');
			$table->char('employee_id',4); // format: Ennn e.g. E001
			$table->boolean('active');
			$table->float('salary');
			$table->date('startdate');
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
		Schema::dropIfExists('employees');
	}

}
