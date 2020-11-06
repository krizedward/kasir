<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //memiliki dua roles yang berbeda
        Role::create([
          'name' => 'owner'
        ]);

        Role::create([
          'name' => 'kasir'
        ]);
    }
}
