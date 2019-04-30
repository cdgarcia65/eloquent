<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class)->create([
            'name' => 'David García',
            'gender' => 'm'
        ]);

        factory(App\User::class, 99)->create();
    }
}
