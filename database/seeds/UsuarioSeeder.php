<?php

use App\Models\Usuario;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Usuario::create([
            'nome'  => 'Admin',
            'email' => 'admin@admin.com',
            'senha' => md5('seprevcesmac2020')
        ]);
    }
}
