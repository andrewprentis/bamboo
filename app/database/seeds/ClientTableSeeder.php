<?php

class ClientTableSeeder extends Seeder {

    public function run()
    {
        DB::table('clients')->delete();

        \Client::create([
        		'name' => 'Some Co Ltd',
        		'address_1' => '1 Long Street',
        		'address_2' => null,
        		'town' => 'Slough',
        		'postcode' => 'SL6',
        		'weburl' => 'somecoltd.com',
        		'phone' => '+44 1234 56789'
		]);
        
    }

}
