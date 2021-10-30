<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert(
            array(
                'name' => 'admin',
                'email' => 'admin@test.com',
                'password' =>'admin',
                'usertype' => 1
            )
        );


        DB::table('users')->insert(
            array(
                'name' => 'admin1',
                'email' => 'admin1@test.com',
                'password' =>'admin1',
                'usertype' => 1
            )
        );



        DB::table('users')->insert(
            array(
                'name' => 'nicole',
                'email' => 'nicole@test.com',
                'password' =>'1234',
                'usertype' => 2
            )
        );


    }
}
