<?php

use Illuminate\Database\Seeder;
use App\Stage;

class StageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stages = [
        	['2', 'Pra TK A'],
        	['4', 'Pra TK B'],
        	['6', 'Pra TK C'],
        	['8', 'Jilid 1A'],
        	['10', 'Jilid 1B'],
        	['12', 'Jilid 1C'],
        	['14', 'Jilid 2A'],
        	['16', 'Jilid 2B'],
        	['18', 'Jilid 3A'],
        	['20', 'Jilid 3B'],
        	['22', 'Jilid 4A'],
        	['24', 'Jilid 4B'],
        	['26', 'Jilid 5A'],
        	['28', 'Jilid 5B'],
        	['30', 'Juz 27'],
        	['32', 'Jilid 6'],
        	['34', "Al-Qur'an"],
        	['36', 'Ghorib'],
        	['38', 'Tajwid'],
        	['40', 'Finishing'],
        	['42', 'Imtas/Tashih'],
        	['0', 'Santri Baru'],
        	['44', 'Pasca TPQ']

        ];

        foreach ($stages as $stage) {
        	$st = new Stage();
	        $st->weight = $stage[0];
	        $st->name = $stage[1];
	        $st->slug = str_slug($stage[1]);
	        $st->save();
        }
        
    }
}
