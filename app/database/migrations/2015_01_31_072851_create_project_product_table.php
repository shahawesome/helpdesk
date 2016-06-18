<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('project_product', function($table)
		{
			$table->increments('id');
			$table->integer('project_id')->unssigned();
			$table->integer('product_id')->unssigned();
			$table->string('status');
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
		Schema::drop('project_product');
	}
}