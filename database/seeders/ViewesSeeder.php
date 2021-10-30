<?php

namespace Database\Seeders;

use App\Models\PostsViews;
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
        PostsViews::factory(150)->create();

    }
}
