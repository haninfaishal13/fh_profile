<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'email' => 'haninfaishal13@gmail.com',
            'password' => bcrypt('123456'),
            'name' => 'Faishal Hanin',
            'slug' => 'faishal_hanin'
        ];
        User::create($user);
    }
}
