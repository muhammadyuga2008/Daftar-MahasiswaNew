<?php

namespace Database\Seeders;

use App\Models\Fakultas;
use App\Models\ProgramStudi;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       User::create([
        'name'=>'admin',
        'email'=>'admin@gmail.com',
        'password'=>bcrypt('123'),
        'role'=>'admin'
       ]);

       Fakultas::create([
        'nama_fakultas'=>'Fakultas Teknik',
        'foto'=>'image/teknik.jpg'
       ]);
        Fakultas::create([
        'nama_fakultas'=>'Fakultas Hukum',
        'foto'=>'image/hukum.jpeg'
       ]);
       ProgramStudi::create([
        'fakultas_id'=>1,
        'prodi'=>'Teknik Sipil',
        'harga'=>12000000
       ]);
       ProgramStudi::create([
        'fakultas_id'=>1,
        'prodi'=>'Teknik Informatika',
        'harga'=>14000000
       ]);
         ProgramStudi::create([
        'fakultas_id'=>1,
        'prodi'=>'Teknik Mesin',
        'harga'=>11000000
       ]);
       
        ProgramStudi::create([
        'fakultas_id'=>2,
        'prodi'=>'Ilmu Hukum',
        'harga'=>12000000
       ]);
       ProgramStudi::create([
        'fakultas_id'=>2,
        'prodi'=>'Ilmu Politik',
        'harga'=>11000000
       ]);
    }
}
