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
        factory(\App\Models\User::class)->create([
            'email' => 'client1@user.com',
            'account_id' => 1
        ]);

        factory(\App\Models\User::class)->create([
            'email' => 'client2@user.com',
            'account_id' => 2
        ]);
    }
}
