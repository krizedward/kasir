<?php

use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Profile::create([
        'name' => 'Resto Saya',
        'address' => 'Alamat Resto',
        'city' => 'Kota Resto',
        'phone' => 'Telepon Resto',
      ]);
    }
}
