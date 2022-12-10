<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "Faisal Ramadhan",
            'email' => "faisalramadhan1299@gmail.com",
            'mobile' => "6285891180613",
            'password' => bcrypt("12345678"),
            'twitter' => 'https://twitter.com/EquanimityRF',
            'instagram' => 'https://www.instagram.com/faisalrmdhn08/',
            'github' => 'https://github.com/Kolong-Meja',
        ]);
    }
}
