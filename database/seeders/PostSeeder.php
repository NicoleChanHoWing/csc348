<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('posts')->insert(
            array(
                'title' => 'Example post 1',
                'content' => 'this is a example for post 1 inserint seed',
                'userid' =>1
            )
        );


        DB::table('posts')->insert(
            array(
                'title' => 'Example post 2',
                'content' => 'this is a example for post 2 inserint seed',
                'userid' =>1
            )
        );


        DB::table('posts')->insert(
            array(
                'title' => 'Example post 3',
                'content' => 'this is a example for post 3 inserint seed',
                'userid' =>2
            )
        );



        DB::table('posts')->insert(
            array(
                'title' => 'Example post 4',
                'content' => 'this is a example for post 4 inserint seed',
                'userid' =>3
            )
        );



        DB::table('posts')->insert(
            array(
                'title' => 'Example post 5',
                'content' => 'this is a example for post 5 inserint seed',
                'userid' =>3
            )
        );




        DB::table('posts')->insert(
            array(
                'title' => 'Example post 6',
                'content' => 'this is a example for post 6 inserint seed',
                'userid' =>3
            )
        );
    }
}
