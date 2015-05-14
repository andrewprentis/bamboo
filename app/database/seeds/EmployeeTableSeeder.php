<?php

class EmployeeTableSeeder extends Seeder {

    public function run()
    {
        DB::table('employees')->delete();

        \Employee::create([
        		'employee_id' => 'E001',
        		'salary' => '55000.00',
        		'startdate' => '2008-07-01',
        		'active' => 1
		]);
        
        \Employee::create([
        		'employee_id' => 'E002',
        		'salary' => '25000.00',
        		'startdate' => '2010-02-14',
        		'active' => 1
        ]);
        
        \Employee::create([
        		'employee_id' => 'E003',
        		'salary' => '40000.10',
        		'startdate' => '2010-05-14',
        		'active' => 1
        ]);
    }

}
