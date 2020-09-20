<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 499)->create();

        App\User::create([
            'name' => 'teste nteste',
            'username' => 'nteste',
            'password' => bcrypt('123')
        ]);
    }
}
