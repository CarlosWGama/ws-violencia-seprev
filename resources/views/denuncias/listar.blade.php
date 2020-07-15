@extends('template')

@section('titulo', 'Denúncias')

@section('conteudo')
<div class="user-data m-b-30">
        <h3 class="title-3 m-b-30">
            <i class="zmdi zmdi-account-calendar"></i>Denuncias Cadastrados
            <a target="_blank" href="{{route('denuncias.csv')}}" class="btn btn-primary">
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
                        <td>Autor</td>
                        <td>Tipo Violação</td>
                        <td>Data da Violência</td>
                        <td>Mídia</td>
                        <td>Opções</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($denuncias as $denuncia)
                    <tr>
                        <!-- ID -->
                        <td><h6>{{$denuncia->id}}</h6></td>
                        <!-- AUTOR -->
                        <td><h6>{{$denuncia->autor->nome}}</h6></td>
                        <!-- TIPO VIOLAÇÃO -->
                        <td><h6>{{$denuncia->tipoViolencia->descricao}}</h6></td>
                        <!-- DATA VIOLAÇÃO -->
                        <td><h6>{{$denuncia->data_violacao}}</h6></td>
                        <!-- MIDIA -->
                        <td>
                            @if(!empty($denuncia->midia))
                            <div class="table-data__info">
                                <span>
                                    <a href="{{url('storage/img/'.$denuncia->midia->midia)}}" target="_blank">Clique aqui para acessar</a>
                                </span>
                            </div>
                            @else
                            <h6>Não tem mídia</h6>
                            @endif
                        </td>
                        <!-- OPÇÕES -->   
                        <td>
                            <!-- BAIXAR -->
                            <a title="Baixar dados do denuncia" target="_blank" href="{{route('denuncias.pdf', ['id' => $denuncia->id])}}">
                                <span class="more"><i class="zmdi zmdi-download"></i></span>
                            </a>
                            <!-- EXCLUIR -->
                            <span class="more remover-modal" data-toggle="modal" data-target="#smallmodal" data-id="{{$denuncia->id}}"><i class="zmdi zmdi-delete"></i></span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
        <!-- Paginação -->
        <div style="padding:10px">{{$denuncias->links()}}</div>
        
        </div>
      
    </div>


    @push('javascript')
  <!-- modal small -->
  <div class="modal fade" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="smallmodalLabel">Remover Denúncia</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                       Deseja Realmente excluir esse denúncia?
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
        let denunciaID;
        $('.remover-modal').click(function() {
            denunciaID = $(this).data('id');
        })

        $('.btn-deletar').click(() => window.location.href="{{route('denuncias.excluir')}}/"+denunciaID);
    </script>
@endpush
@endsection