<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDebitPurposesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('debitPurposes',function($table){
			//common property
			$table->increments('id');
			$table->string('date');
			$table->string('voucherNO');
			$table->string('purpose');
			$table->string('amount');
			$table->text('note');
			//for bank loan
			$table->string('loneTransactionId');
			$table->string('bankName');
			$table->string('accountNo');
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('debitPurposes');
	}

}
