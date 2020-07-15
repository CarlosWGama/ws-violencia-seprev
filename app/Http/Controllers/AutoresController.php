<?php

namespace App\Http\Controllers;

use App\AuthorReports;
use Illuminate\Http\Request;
use PDF;

class AutoresController extends Controller {

    private $dados = ['menu' => 'usuarios'];

    /** Lista o usuários */
    public function index() {
        $this->dados['autores'] = AuthorReports::paginate(10);
        return view('autores.listar', $this->dados);
    }

    /**
     * Baixa em PDF os dados do autor
     */
    public function baixarAutor(Request $request, int $id) {
        $dados['autor'] = AuthorReports::findOrFail($id);
        $pdf = PDF::loadView('autores.pdf', $dados);
        //return $pdf->download('invoice.pdf');
        return $pdf->stream();
    }
    
    
    /**
     * Baixa em CSV todos os autores coletados
     */
    public function baixarTodos(Request $request) {
        $dados['autores'] = AuthorReports::all();
        
        $html = view('autores.xls', $dados);
        //Arruma web.acentuação
        if (mb_detect_encoding($html) == 'UTF-8') 
            $html = mb_convert_encoding($html , "HTML-ENTITIES", "UTF-8");
        

        $arquivo = "autores.xls";  
        // Configurações header para forçar o download  
        header('Content-Type: application/vnd.ms-excel; charset=UTF-8');
        header('Content-type: application/vnd.ms-excel; charset=UTF-8');
        header('Content-Disposition: attachment;filename="'.$arquivo.'"');
        header('Cache-Control: max-age=0');
        // Se for o IE9, isso talvez seja necessário
        header('Cache-Control: max-age=1');
        
        // Envia o conteúdo do arquivo  
        echo $html;  
    }

    /** Remove um autor
     * @param $id id do autor
     */
    public function excluir(int $id) {
        AuthorReports::destroy($id);
        return redirect()->route('autores.listar')->with('sucesso', 'Autor excluído');
    }
}
