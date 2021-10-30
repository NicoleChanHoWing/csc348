<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ViewesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('posts_views')->insert(
            array(
                'id_post' => 2,
                'userid' => 1
            )
        );


        DB::table('posts_views')->insert(
            array(
                'id_post' => 3,
                'userid' => 1
            )
        );


        DB::table('posts_views')->insert(
            array(
                'id_post' => 4,
                'userid' => 1
            )
        );


        DB::table('posts_views')->insert(
            array(
                'id_post' => 2,
                'userid' => 2
            )
        );


        DB::table('posts_views')->insert(
            array(
                'id_post' => 2,
                'userid' => 3
            )
        );


        DB::table('posts_views')->insert(
            array(
                'id_post' => 3,
                'userid' => 2
            )
        );


        DB::table('posts_views')->insert(
            array(
                'id_post' => 3,
                'userid' => 2
            )
        );


        DB::table('posts_views')->insert(
            array(
                'id_post' => 3,
                'userid' => 3
            )
        );


        DB::table('posts_views')->insert(
            array(
                'id_post' => 4,
                'userid' => 2
            )
        );


        DB::table('posts_views')->insert(
            array(
                'id_post' => 4,
                'userid' => 3
            )
        );



    }
}
