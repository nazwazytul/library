<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $userData = [
            [
                'name'=>'Admin Perpustakan',
                'email'=>'adminperpus@gmail.com',
                'role'=>'admin',
                'password'=>bcrypt('iniadmin')
            ],
            [
                'name'=>'Petugas Perpustakaan',
                'email'=>'petugasperpus@gmail.com',
                'role'=>'petugas',
                'password'=>bcrypt('inipetugas')
            ],
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
