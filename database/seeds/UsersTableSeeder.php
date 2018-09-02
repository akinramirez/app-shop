<?php

use Illuminate\Database\Seeder;
use App\User; // Se agrego esta linea para agregar la clase User

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Juan',
            'email' => 'juan.benito@hotmail.com',
            'password' => bcrypt('123123'),
            'admin' => true
        ]);
    }
}
