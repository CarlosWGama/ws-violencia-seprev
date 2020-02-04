<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AuthorReports;
use App\Complaint;
use App\Media;
use App\Teste;
use App\ViolationType;
use Exception;

class ApiController extends Controller
{
    public function author_reports()
    {
        $authors = AuthorReports::all();
        return json_encode($authors);
    }

    public function violation_types()
    {
        $violation_types = ViolationType::all();
        return json_encode($violation_types);
    }

    public function complaints()
    {
        $complaints = Complaint::all();
        return json_encode($complaints);
    }

    public function saveAuthorReports(Request $r)
    {
        $author = new AuthorReports();
        try {
            $author->nome = $r->edtNome;
            $author->rg = $r->edtRg;
            $author->rua = $r->edtRua;
            $author->numero = $r->edtNumero;
            $author->bairro = $r->edtBairro;
            $author->cidade = $r->edtCidade;
            $author->estado = $r->edtEstado;
            $author->pais = $r->edtPais;
            $author->complemento = $r->edtComplemento;

            $existsAuthor = AuthorReports::where('rg', $r->edtRg)->first();
            if ($existsAuthor) {
                $author = $existsAuthor;
            } else {
                $author->save();
            }
        } catch (Exception $e) {
            $author->id = 0;
        } finally {
            return json_encode($author);
        }
    }


    public function saveComplaint(Request $r)
    {
        // $media = new Media();
        $complaint = new Complaint();
        try {

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
        } catch (Exception $e) {
            $complaint->id = 0;
        } finally {
            return json_encode($complaint);
        }
    }

    public function saveImage(Request $request)
    {
        try {
            $getNameFile = date('D/M/Y') . date('h:i:s');
            $getNameFile = str_replace(':', '-', $getNameFile);
            $getNameFile = str_replace('/', '-', $getNameFile);
            $media = new Media();
        

            if ($request->hasFile('midia') && $request->file('midia')->isValid()) {

                // PRECISA ADICIONAR OS TIPOS DE ARQUIVOS QUE DEVEM SER PASSADOS AQUI
                $extension = $request->midia->extension();
                if ($extension == "jpeg" || $extension == "jpg") {
                    $media->tipo_midia = "fotografia";
                } else {
                    $media->tipo_midia = "video";
                }

            
                $media->path_midia = $request->path_midia = "/storage/app/public/img";
                $upload = $request->midia->storeAs('img', $getNameFile);

                $verificaExistente = Media::where('midia', $upload)->first();
                if(!$verificaExistente == $upload){
                    $media->midia = $upload;
                    $media->save();
                }
                
            }
        } catch (Exception $e) {
        }
    }

    public function verifyConnection(Request $r)
    {
        $resposta = "";
        try {
            $resposta = "OK";
        } catch (Exception $e) {
            $resposta = "ERRO";
        }
        return json_encode($resposta);
    }
}
