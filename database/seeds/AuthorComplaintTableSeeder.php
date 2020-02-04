<?php

use Illuminate\Database\Seeder;
use App\AuthorReports;

class AuthorComplaintTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AuthorReports::create([
            'id' => 1,
            'nome' => "anonimo",
            'rg' => "anonimo",
            'rua' => "anonimo",
            'numero' => 0,
            'bairro' => "anonimo",
            'cidade' => "anonimo",
            'estado' => "anonimo",
            'pais' => "anonimo",
            'complemento' => "anonimo"
        ]);
    }
}
