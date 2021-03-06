<?php

class PeopleTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Person::truncate();
		
		Person::create(array(
			'first_name' => 'Adam',
			'second_name' => 'Carter',
			'address1' => '20 Test Road',
			'address2' => 'Great Sankey',
			'address3' => 'Warrington',
			'postcode' => 'WA10 10TS',
			'email' => 'araquach@yahoo.co.uk',
			'phone' => '01925 123456',
			'mobile' => '07123456789',
		));
		
		Person::create(array(
			'first_name' => 'John',
			'second_name' => 'Jones',
			'address1' => '25 Testicle Drive',
			'address2' => 'Stockton Heath',
			'address3' => 'Warrington',
			'postcode' => 'WA4 5SH',
			'email' => 'john@yahoo.co.uk',
			'phone' => '01925 654321',
			'mobile' => '07987654321',
		));
		
		Person::create(array(
			'first_name' => 'Jimmy',
			'second_name' => 'Sharpe',
			'address1' => '15 Special Road',
			'address2' => 'Bewsey',
			'address3' => 'Warrington',
			'postcode' => 'WA1 5WA',
			'email' => 'jimmy@jakata.co.uk',
			'phone' => '01925 333333',
			'mobile' => '07983333333',
		));
	}
}



