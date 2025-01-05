<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Kategori;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'nama' => 'Administrator',
            'email' => 'admin@gmail.com',
            'role' => '1',
            'status' => 1,
            'hp' => '08784789087',
            'password' => bcrypt('P@55word'),
        ]);

        #untuk record beriktnya silahkan, beri nilai beberapa pada nilai: nama, email, hp, dengan masing-masing anggota kelompok

        User::create([
            'nama' => 'Bara Rifki Annajib',
            'email' => '19230480@bsi.ac.id',
            'role' => '0',
            'status' => 0,
            'hp' => '087851339249',
            'password' => bcrypt('P@55word'),
        ]);

        User::create([
            'nama' => 'Restu Ardi Putranto',
            'email' => '19232150@bsi.ac.id',
            'role' => '0',
            'status' => 1,
            'hp' => '083101487796',
            'password' => bcrypt('P@55word'),
        ]);

        User::create([
            'nama' => 'Christina Yuli Anggita',
            'email' => '19230947@bsi.ac.id',
            'role' => '0',
            'status' => 1,
            'hp' => '087872834620',
            'password' => bcrypt('P@55word'),
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
