<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Usuario;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Usuario::create([
            'nome' => 'Administrador',
            'email' => 'adm@adm.com',
            'senha' => Hash::make('senhaadm123'),
            'cpf' => '12345678910',
            'escola_id' => 0,
            'super_admin' => true,
            'telefone' => '12345678910'
        ]);
    }
}
