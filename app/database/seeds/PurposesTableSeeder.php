<?php

class PurposesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
	DB::table('purposes')->insert(array(
	 array('id'=>1, 'type'=>"debit", 'purpose'=>'debit purpose-1'),
	 array('id'=>2, 'type'=>"credit", 'purpose'=>'credit purpose-1'),
	 array('id'=>3, 'type'=>"debit", 'purpose'=>'debit purpose-2'),
	 array('id'=>4, 'type'=>"credit", 'purpose'=>'credit purpose-2')
	 ));
	}

}
