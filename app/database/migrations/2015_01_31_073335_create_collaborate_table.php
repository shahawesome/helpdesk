<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollaborateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('collaborate', function($table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('address');
			$table->string('phone_no');
			$table->string('fax_no')
			$table->string('type');
			$table->integer('collaborate_staff_id')->unssigned();
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
		Schema::drop('collaborate');
	}
}