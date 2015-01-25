<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		 $this->call('PurposesTableSeeder');
		 $this->call('VouchersTableSeeder');
		 $this->call('BanksTableSeeder');
	}

}
