<?php

use Illuminate\Database\Seeder;

class UserAccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\UserAccount::class)->create([
            'email' => 'client1@user.com',
            'account_id' => 1
        ]);

        factory(\App\Models\UserAccount::class)->create([
            'email' => 'client2@user.com',
            'account_id' => 2
        ]);
    }
}
