<?php

use Illuminate\Database\Seeder;
use App\TransactionType;

class TransactionTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tts = [
        	'Pendaftaran',
        	'Sarana Prasarana',
        	'Seragam',
        	'SPP',
        	'Buku',
        	'Infaq',
        	'Tabungan Qatam'
        ];

        foreach ($tts as $tt) {
        	$t = new TransactionType();
	        $t->name = $tt;	        
	        $t->slug = str_slug($tt);
	        $t->save();
        }
    }
}
