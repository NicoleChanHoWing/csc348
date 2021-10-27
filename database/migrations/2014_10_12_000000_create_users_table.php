<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('usertype');
            $table->rememberToken();
            $table->timestamps();
        });

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

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
