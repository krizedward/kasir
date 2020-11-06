<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $owner = User::create([
        'name' => 'Edward Kristian',
        'email' => 'edwardthemangare@gmail.com',
        'password' => bcrypt('123456')
      ]);

      $owner->assignRole('owner');

      $kasir = User::create([
          'name' => 'Pegawai Kasir',
          'email' => 'kasir@gmail.com',
          'password' => bcrypt('123456')
        ]);

        $kasir->assignRole('kasir');
    }
}
