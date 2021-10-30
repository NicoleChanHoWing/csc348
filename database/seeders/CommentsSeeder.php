<?php

namespace Database\Seeders;

use App\Models\CommentsPost;
use Illuminate\Database\Seeder;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        CommentsPost::factory(50)->create();
    }
}
