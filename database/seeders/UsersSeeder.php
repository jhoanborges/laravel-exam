<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        $table->string('name');
//        $table->string('email')->unique();
//        $table->timestamp('email_verified_at')->nullable();
//        $table->string('password');
        User::create([
            'name' => 'Angel Hdz',
            'email' => 'angel.hdz91@hotmail.com',
            'password' => bcrypt('angelhdz')
        ]);
    }
}
