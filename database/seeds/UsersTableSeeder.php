<?php

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $god = Role::where('name', 'super')->first();
        $immortal = Role::where('name', 'admin')->first();
        $super = User::create([
          'username' => '008207',
          'firstname' => 'Marvin',
          'lastname' => 'Bentinganan',
          'password' => bcrypt('0822012'),
          'email' => 'marvbentinganan@gmail.com'
        ]);

        $super->role()->attach($god);
        $super->role()->attach($immortal);
    }
}
