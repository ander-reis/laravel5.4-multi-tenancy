<?php

use Illuminate\Database\Seeder;

class AccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        factory(\App\Models\Account::class, 2)->create();

        factory(\App\Models\Account::class)->create([
            'subdomain' => 'client1'
        ]);

        factory(\App\Models\Account::class)->create([
            'subdomain' => 'client2'
        ]);
    }
}
