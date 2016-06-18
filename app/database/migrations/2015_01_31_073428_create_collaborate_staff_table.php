<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollaborateStaffTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('collaborate_staff', function($table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('phone_no');
			$table->string('email');
			$table->string('remember_token');
			
			$table->date('updated_at');
			$table->date('created_at');
			$table->softDeletes();
		});
	}
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('collaborate_staff');
	}
}