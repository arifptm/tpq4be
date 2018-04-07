<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$role_super = Role::where('name', 'super')->first();
    	$role_user = Role::where('name', 'user')->first();
    	$role_admin = Role::where('name', 'admin')->first();

		$super = new User();
        $super->username = 'Super';
        $super->email = 'super@app.tes';
        $super->password = bcrypt('123456');
        $super->verified = 1;
        $super->save();
        $super->roles()->attach($role_super);
        $super->profile()->create([
            'firstname' => 'Super',
            'lastname' => 'User',
            'image' => 'http://i.pravatar.cc/300'
        ]);

        $admin = new User();
        $admin->username = 'Admin';
        $admin->email = 'admin@app.tes';
        $admin->password = bcrypt('123456');
        $admin->verified = 1;
        $admin->save();
        $admin->roles()->attach($role_admin);
        $admin->profile()->create([
            'firstname' => 'Admin',
            'lastname' => 'Istrator',
            'image' => 'http://i.pravatar.cc/300'
        ]);

        $user = new User();
        $user->username = 'User';
        $user->email = 'user@app.tes';
        $user->password = bcrypt('123456');
        $user->verified = 1;
        $user->save();
        $user->roles()->attach($role_user);
        $user->profile()->create([
            'firstname' => 'General',
            'lastname' => 'User',
            'image' => 'http://i.pravatar.cc/300'
        ]);
    }
}

