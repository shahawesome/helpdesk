<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkorderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
public function up()
	{
		Schema::create('workorder', function($table)
		{
			$table->increments('id');
			$table->string('task_details');
			$table->date('date');
			$table->time('time');
			$table->string('summary');
			$table->integer('project_product_id')->unssigned();
			$table->integer('user_id')->unssigned();
			$table->integer('workorder_status_id')->unssigned();
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
		Schema::drop('workorder');
	}
}