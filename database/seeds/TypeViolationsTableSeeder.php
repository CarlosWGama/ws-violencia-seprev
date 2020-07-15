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
        ViolationType::create(['id' => 1,'descricao' => "Maus-tratos "]);
        ViolationType::create(['id' => 2,'descricao' => "Negligência"]);
        ViolationType::create(['id' => 3,'descricao' => "Fornecimento de bebida alcoólica"]);
        ViolationType::create(['id' => 4,'descricao' => "Fornecimento de armas, munição ou explosivos"]);
        ViolationType::create(['id' => 5,'descricao' => "Hospedagem Irregular"]);
        ViolationType::create(['id' => 6,'descricao' => "Tráfico de drogas"]);
        ViolationType::create(['id' => 7,'descricao' => "Transporte Irregular"]);
        ViolationType::create(['id' => 8,'descricao' => "Trabalho Infantil"]);
        ViolationType::create(['id' => 9,'descricao' => "Violência Física"]);
        ViolationType::create(['id' => 10,'descricao' => "Violência Psicológica"]);
        ViolationType::create(['id' => 11,'descricao' => "Violência Sexual"]);
        ViolationType::create(['id' => 12,'descricao' => "Violência Institucional"]);
        ViolationType::create(['id' => 13,'descricao' => "Violência Autoprovocada/Autoinfligida"]);
    }
}
