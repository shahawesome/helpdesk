<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncidentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('incident', function($table)
		{
			$table->increments('id');
			$table->string('report_source');
			$table->string('priority');
			$table->date('date');
			$table->time('time');
			$table->string('description');
			$table->string('type');
			$table->integer('project_product_id')->unssigned();
			$table->integer('user_id')->unssigned();
			$table->integer('incident_status_id')->unssigned();
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
		Schema::drop('incident');
	}
}