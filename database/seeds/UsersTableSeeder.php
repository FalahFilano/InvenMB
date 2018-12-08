<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama' => 'Admin',
            'email' => 'admin@email.com',
            'password' => Hash::make('hehe'),
            'telp' => '087703402012',
            'alamat' => 'Alamat',
            'departemen' => 'Departemen',
            'kartu_identitas' => 'no',
            'role' => 1
        ]);
    }
}
