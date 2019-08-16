<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
    }
}

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
           ['name'=>'Le Huynh', 'email'=>'huynh@gmail.com', 'password'=>bcrypt('matkhau')],
            ['name'=>'Le Huynh1', 'email'=>'huynh1@gmail.com', 'password'=>bcrypt('matkhau')],
            ['name'=>'Le Huynh2', 'email'=>'huynh3@gmail.com', 'password'=>bcrypt('matkhau')],
        ]);
    }
}