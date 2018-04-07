<?php

use Illuminate\Database\Seeder;
use App\ClassGroup;

class ClassGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $group = new ClassGroup();
        $group->name = 'TPQ';
        $group->slug = 'tpq';
        $group->description = 'TPQ Anak-anak';
        $group->save();

        $group = new ClassGroup();
        $group->name = 'TPQD';
        $group->slug = 'tpqd';
        $group->description = 'TPQ Dewasa';
        $group->save();
        
    }
}
