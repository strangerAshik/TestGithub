<?php

class VouchersTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
	DB::table('vouchers')->insert(array(
	 array('id'=>'1', 'voucherNo'=>'1')
	 
	 ));
	}

}
?>
