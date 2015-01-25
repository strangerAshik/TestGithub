<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBanksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('banks',function($table){
			
			$table->increments('id')->unique();
			$table->string('date');
			$table->string('bankName');
			$table->string('accountNo');
			$table->string('balance');
			$table->string('address');
			$table->string('createddAt');
			$table->string('updatedAt');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('banks');
	}

}
