<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    User::insert([
            'name' => 'Admin',
            'cognome' => 'Admin',
            'email' => 'admin@gmail.com',
            'telefono' => '34343434',
            'password' => Hash::make('Tassello'),
            ]);
    User::insert([
        'name' => 'Gioele',
        'cognome' => 'Valori',
        'email' => 'gioele@gmail.com',
        'telefono' => '34343434',
        'password' => Hash::make('Tassello'),
        ]);
    
        }

    }

