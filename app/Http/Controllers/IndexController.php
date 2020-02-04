<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AuthorReports;
use App\Complaint;
use App\Http\Requests\ValidationApiRequest;
use App\Media;
use App\ViolationType;
use Exception;

class IndexController extends Controller
{
    public function index()
    {
        $allAuthorReports = AuthorReports::all()->count();
        $allReports = Complaint::all()->count();
        $allUploads = Media::all()->count();

        // Denuncias Anonimas 
        $allAnonymousrReports = Complaint::where('id_author_reports', '1')->count();

        // VITIMAS E TESTEMUNHAS
        $allReportsWitness = Complaint::where('classificacao', 'Testemunha')->count();
        $allReportsVictim = Complaint::where('classificacao', 'Vitima')->count();

        // Tipos de Violação
        $allViolationTypeSaleofAlcoholicBeverages =  Complaint::where('id_violation_types', 1)->count();
        $allViolationTypeBullying = Complaint::where('id_violation_types', 2)->count();
        $allViolationTypeSexualExploitation = Complaint::where('id_violation_types', 3)->count();
        $allViolationTypeChildLabor = Complaint::where('id_violation_types', 4)->count();
        $allViolationTypeSelfMutilation = Complaint::where('id_violation_types', 5)->count();


        // Grau de Relacionamento com Vítimas 
        $allFriend = Complaint::where('grau_relacao', 'Amigo')->count();
        $allTeacher = Complaint::where('grau_relacao', 'Professor')->count();
        $allFamily = Complaint::where('grau_relacao', 'Familiar')->count();
        $allOthers = Complaint::where('grau_relacao', 'Outros')->count();
        //Porcentagem de Relacionamento com Vítimas 

        $percentFriend = $this->calcularPorcentagem($allFriend, $allReportsWitness);
        $percentTeacher = $this->calcularPorcentagem($allTeacher, $allReportsWitness);
        $percentFamily = $this->calcularPorcentagem($allFamily, $allReportsWitness);
        $percentOthers = $this->calcularPorcentagem($allOthers, $allReportsWitness);

        $percentFamily = $this->verificarTamanho($percentFamily);
        $percentTeacher = $this->verificarTamanho($percentTeacher);
        $percentOthers = $this->verificarTamanho($percentOthers);
        $percentFriend = $this->verificarTamanho($percentFriend);


        return view('index', compact(
            'allAuthorReports',
            'allReports',
            'allUploads',
            'allViolationTypeSaleofAlcoholicBeverages',
            'allViolationTypeBullying',
            'allViolationTypeSexualExploitation',
            'allViolationTypeChildLabor',
            'allViolationTypeSelfMutilation',
            'allReportsWitness',
            'allReportsVictim',
            'allAnonymousrReports',
            'allFriend',
            'allTeacher',
            'allFamily',
            'allOthers',
            'percentFriend',
            'percentTeacher',
            'percentFamily',
            'percentOthers'
        ));
    }

    private function calcularPorcentagem($parte, $todo)
    {
        if ($todo == 0)
            return $parte;
        else
            return $parte * 100 / $todo;
    }

    private function verificarTamanho($string)
    {
        if (strlen($string) > 4) {
            return substr($string, 0, 4);
        } else
            return $string;
    }

    public function teste()
    {
        return view('teste');
    }

    public function uploadTeste(Request $request)
    {
        try {
            $getNameFile = date('D/M/Y') . date('h:i:s');
            $getNameFile = str_replace(':', '-', $getNameFile);
            $getNameFile = str_replace('/', '-', $getNameFile);
            $media = new Media();

        
            if ($request->hasFile('midia') && $request->file('midia')->isValid()) {
                $extension = $request->midia->extension();
                if ($extension == "jpeg" || $extension == "jpg") {
                    $media->tipo_midia = "fotografia";
                } else {
                    $media->tipo_midia = "video";
                }
                $media->path_midia = $request->path_midia = "/storage/app/public/img";
                $upload = $request->midia->storeAs('img', $getNameFile);
                $media->midia = $upload;
                $media->save();
            }
        } catch (Exception $e) {
        }
    }

    public function testeapi(Request $r){
        // $var = Complaint::where('id', 1)->first();
        // return json_encode($var);
        $media = new Media();
        $complaint = new Complaint();
        $retorno = ""; 
        try{

            $r->validate([
                'id_violation_types' => 'required',
                'id_author_reports' => 'required',
                'classificacao' => 'required',
                'identificacao' => 'required',
                'local_violacao' => 'required',
                'data_violacao' => 'required',
                'descricao_violacao' => 'required',
                'midia_anexada' => 'required'
            ]);
            
            $complaint->id_violation_types = $r->id_violation_types;
            $complaint->id_author_reports = $r->id_author_reports;
            $complaint->classificacao = $r->classificacao;
            $complaint->identificacao = $r->identificacao;
            $complaint->grau_relacao = $r->grau_relacao;
            $complaint->local_violacao = $r->local_violacao;
            $complaint->estabelecimento = $r->estabelecimento;
            $complaint->data_violacao = $r->data_violacao;
            $complaint->descricao_violacao = $r->descricao_violacao;
            $complaint->midia_anexada = $r->midia_anexada;
            $complaint->tipo_midia = $r->tipo_midia;
            $complaint->vinculo_institucional = $r->vinculo_institucional;
            $complaint->tipo_instituicao = $r->tipo_instituicao;
            $complaint->instituicao = $r->instituicao;
            $complaint->save();
            $retorno = $complaint;
        }catch(Exception $e){
            $message = $e->getMessage();
            $retorno = $message;
        }finally{
            return json_encode($retorno);
        }
    }

}
