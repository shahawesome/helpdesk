<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product', function($table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('number');
			$table->string('serial_number')->unique();
			$table->string('type');
			$table->string('support_id');
			$table->string('service_level');
			$table->date('start_date');
			$table->date('end_date');
			$table->integer('vendor_id')->unssigned();
			$table->integer('partner_id')->unssigned();
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
		Schema::drop('product');
	}
}