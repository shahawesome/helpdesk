<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('project', function($table)
		{
			$table->increments('id');
			$table->string('project_director');
			$table->string('PO_number');
			$table->integer('customer_id')->unssigned();
			$table->integer('project_product_status_id')->unssigned();
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
		Schema::drop('project');
	}
}