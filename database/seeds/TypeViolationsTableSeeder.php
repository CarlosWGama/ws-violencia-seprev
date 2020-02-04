<?php

use Illuminate\Database\Seeder;
use App\ViolationType;

class TypeViolationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ViolationType::create([
            'id' => 1,
            'descricao' => "Venda Bebidas Alcoolicas"
        ]);
        ViolationType::create([
            'id' => 2,
            'descricao' => "Bullying"
        ]);
        ViolationType::create([
            'id' => 3,
            'descricao' => "Trabalho Infantil"
        ]);
        ViolationType::create([
            'id' => 4,
            'descricao' => "Exploracao Sexual"
        ]);
        ViolationType::create([
            'id' => 5,
            'descricao' => "Automutilacao"
        ]);
    }
}
