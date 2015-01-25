<?php

class BanksTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		
	DB::table('banks')->insert(array(
	 array('id'=>'1', 'date'=>date('M d Y'),'bankName'=>'DDBL','accountNo'=>'1323','address'=>'Mohakhali')
	 
	 ));
	}

}
?>
