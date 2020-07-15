<?php

namespace App\Http\Controllers;

use App\Complaint;
use Illuminate\Http\Request;
use PDF;

class DenunciaController extends Controller {

    private $dados = ['menu' => 'denuncias'];

    /** Lista o usuários */
    public function index() {
        $this->dados['denuncias'] = Complaint::paginate(10);
        return view('denuncias.listar', $this->dados);
    }

    /**
     * Baixa em PDF os dados do denuncia
     */
    public function baixarDenuncia(Request $request, int $id) {
        $dados['denuncia'] = Complaint::findOrFail($id);
        $pdf = PDF::loadView('denuncias.pdf', $dados);
        //return $pdf->download('invoice.pdf');
        return $pdf->stream();
    }
    
    
    /**
     * Baixa em CSV todos os denuncias coletados
     */
    public function baixarTodos(Request $request) {
        $dados['denuncias'] = Complaint::all();
        
        $html = view('denuncias.xls', $dados);
        //Arruma web.acentuação
        if (mb_detect_encoding($html) == 'UTF-8') 
            $html = mb_convert_encoding($html , "HTML-ENTITIES", "UTF-8");
        

        $arquivo = "denuncias.xls";  
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

    /** Remove uma denuncia
     * @param $id da denuncia
     */
    public function excluir(int $id) {
        Complaint::destroy($id);
        return redirect()->route('denuncias.listar')->with('sucesso', 'Denúncia excluída');
    }
}
