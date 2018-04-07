<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(ClassGroupTableSeeder::class);
        $this->call(StageTableSeeder::class);
        $this->call(TransactionTypeTableSeeder::class);
        $this->call(BalanceTableSeeder::class);
    }
}