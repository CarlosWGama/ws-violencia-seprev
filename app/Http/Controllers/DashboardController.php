<?php

namespace App\Http\Controllers;

use App\AuthorReports;
use App\Complaint;
use Illuminate\Http\Request;
use App\Models\Usuario;
/**
 * Tela Inicial do Admin
 */
class DashboardController extends Controller {
    private $dados = ['menu' => 'dashboard'];

    /** Tela Inicial do Dashboard */
    public function index() {
        $this->dados['totalAutores'] = AuthorReports::count();
        $this->dados['totalDenuncias'] = Complaint::count();
        return view('dashboard.index', $this->dados);
    }
}
