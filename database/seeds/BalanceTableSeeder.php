<?php

use Illuminate\Database\Seeder;
use App\Balance;

class BalanceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1;$i<8;$i++){
        	$bl = new Balance();
        	$bl->transaction_type_id = $i;
        	$bl->debet = 0;
        	$bl->credit = 0;
        	$bl->balance = 0;
        	$bl->save();
        }
    }
}
