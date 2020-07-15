@extends('template')

@section('titulo', 'Autores')

@section('conteudo')
<div class="user-data m-b-30">
        <h3 class="title-3 m-b-30">
            <i class="zmdi zmdi-account-calendar"></i>Autores Cadastrados
            <a target="_blank" href="{{route('autores.csv')}}" class="btn btn-primary">
                <i class="fa fa-download"></i> Baixar todos em XLS
            </a>
        </h3>
        

        <div class="table-responsive table-data">
                @if(session('sucesso'))
                <div class="alert alert-success" role="alert" style="margin:0px 10px">
                    {{session('sucesso')}}
                </div>
                @endif
            <table class="table">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nome</td>
                        <td>RG</td>
                        <td>Opções</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($autores as $autor)
                    <tr>
                        <!-- ID -->
                        <td><h6>{{$autor->id}}</h6></td>
                        <!-- NOME -->
                        <td><h6>{{$autor->nome}}</h6></td>
                        <!-- RG -->
                        <td><h6>{{$autor->rg}}</h6></td>
                        <!-- OPÇÕES -->   
                        <td>
                            <!-- BAIXAR -->
                            <a title="Baixar dados do autor" target="_blank" href="{{route('autores.pdf', ['id' => $autor->id])}}">
                                <span class="more"><i class="zmdi zmdi-download"></i></span>
                            </a>
                            <!-- EXCLUIR -->
                            <span class="more remover-modal" data-toggle="modal" data-target="#smallmodal" data-id="{{$autor->id}}"><i class="zmdi zmdi-delete"></i></span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
        <!-- Paginação -->
        <div style="padding:10px">{{$autores->links()}}</div>
        
        </div>
      
    </div>


    @push('javascript')
  <!-- modal small -->
  <div class="modal fade" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="smallmodalLabel">Remover Usuário</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                       Deseja Realmente excluir esse autor?
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary btn-deletar">Confirmar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal small -->

    <script>
        let autorID;
        $('.remover-modal').click(function() {
            autorID = $(this).data('id');
        })

        $('.btn-deletar').click(() => window.location.href="{{route('autores.excluir')}}/"+autorID);
    </script>
@endpush
@endsection