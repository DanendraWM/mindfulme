<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Apotek;
use App\Models\dokter;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        // level = admin, user, dokter
        user::create([
            'id' =>Str::uuid(),
            'name' => 'test',
            'email' => 'test@example.com',
            'password' => bcrypt('test123'),
            'level' => 'user',
        ]);
        user::create([
            'id' =>Str::uuid(),
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'level' => 'admin',
        ]);
        dokter::create([
            'id' =>Str::uuid(),
            'name' => 'Dr. Jeni Arta Putri',
            'image'=>'dr1.png',
            'spesialis' => 'Psikolog',
            'pengalaman'=>4
        ]);
        dokter::create([
            'id' =>Str::uuid(),
            'name' => 'Dr. Hamelia Putri',
            'image'=>'dr1.png',
            'spesialis' => 'Psikiater',
            'pengalaman'=>5
        ]);
        dokter::create([
            'id' =>Str::uuid(),
            'name' => 'Dr. Izzan Rifki',
            'image'=>'dr1.png',
            'spesialis' => 'Konselor',
            'pengalaman'=>2
        ]);
        dokter::create([
            'id' =>Str::uuid(),
            'name' => 'Dr. Wawan',
            'image'=>'dr1.png',
            'spesialis' => 'Hewan',
            'pengalaman'=>6
        ]);


        Apotek::create([
            'id' =>Str::uuid(),
            'nama'=>'Apotek Dharmawangsa',
            'image'=>'apotek1.png',
            'rating'=>'5'
        ]);
        Apotek::create([
            'id' =>Str::uuid(),
            'nama'=>'Apotek Hermina',
            'image'=>'apotek2.png',
            'rating'=>'5'
        ]);
        Apotek::create([
            'id' =>Str::uuid(),
            'nama'=>'Apotek Siloam',
            'image'=>'apotek3.png',
            'rating'=>'5'
        ]);
        Apotek::create([
            'id' =>Str::uuid(),
            'nama'=>'Apotek Fatmawati',
            'image'=>'apotek4.png',
            'rating'=>'5'
        ]);
        Apotek::create([
            'id' =>Str::uuid(),
            'nama'=>'Apotek Pasar Minggu',
            'image'=>'apotek5.png',
            'rating'=>'5'
        ]);
    }
}
