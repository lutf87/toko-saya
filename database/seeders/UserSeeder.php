<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'Faisol Lutfi',
            'email' => 'luthfiarrahman007@gmail.com',
            'password' => Hash::make('password'),
            'phone' => '087809637823',
            'alamat' => 'Kediri',
            'role' => 'admin'
        ]);
    }
}
