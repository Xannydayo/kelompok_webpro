<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Kategori;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'nama' => 'Administrator',
            'email' => 'admin@gmail.com',
            'role' => '1',
            'status' => 1,
            'hp' => '0812345678901',
            'password' => bcrypt('P@55word'),
        ]);
        #untuk record berikutnya silahkan, beri nilai berbeda pada nilai: nama, email, hp dengan nilai masing-masing anggota kelompok
        User::create([
            'nama' => 'yogaviveka',
            'email' => 'yoga@gmail.com',
            'role' => '0',
            'status' => 1,
            'hp' => '0812345678902',
            'password' => bcrypt('12345678'),
        ]);

        User::create([
            'nama' => 'Salsa',
            'email' => 'salsa@gmail.com',
            'role' => '0',
            'status' => 1,
            'hp' => '0812345678902',
            'password' => bcrypt('12345678'),
        ]);

        User::create([
            'nama' => 'Amru',
            'email' => 'amru@gmail.com',
            'role' => '0',
            'status' => 1,
            'hp' => '0812345678902',
            'password' => bcrypt('12345678'),
        ]);

        #data kategori
        Kategori::create([
            'nama_kategori' => 'Brownies',
        ]);
        Kategori::create([
            'nama_kategori' => 'Combro',
        ]);
        Kategori::create([
            'nama_kategori' => 'Dawet',
        ]);
        Kategori::create([
            'nama_kategori' => 'Mochi',
        ]);
        Kategori::create([
            'nama_kategori' => 'Wingko',
        ]);
    }
}