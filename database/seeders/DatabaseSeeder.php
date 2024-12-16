<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
         'name' => 'Esa Admin',
         'email' => 'esa@example.com',
         'password' => Hash::make('12345678')
        ]);

        //data dummy for company
        \App\Models\Company::create([
            'name' => 'YP NUR ADIA',
            'email' => 'ypnuradia@example.com',
            'address' => 'Jl. Besar Tj. Selamat No.100',
            'latitude' => '3.5296439910753774',
            'longitude' => '98.59105532960814',
            'radius_km' => '0.5',
            'time_in' => '06.30',
            'time_out' => '17.30',
        ]);

        $this->call([
            AttendanceSeeder::class,
            PermissionSeeder::class,
        ]);
    }
}
