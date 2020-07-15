<table border="1">
    <!-- CABECALHO -->
    <tr>
        <td>Código</td>
        <td>Tipo Violação</td>
        <td>Classificação</td>
        <td>Local da Violação</td>
        <td>Estabelecimento</td>
        <td>Data da Violação</td>
        <td>Descrição</td>
        <td>Vínculo Institucional</td>
        <td>Tipo Instituição</td>
        <td>Instituição</td>

        <!-- --------------------------- AUTOR ----------------------- -->
        <td>Código do Autor</td>
        <td>Nome do Autor</td>
        <td>RG do Autor</td>
        
        <!-- --------------------------- VITIMA ----------------------- -->
        <td>Nome da Vítima</td>
        <td>Gênero da Vítima</td>
        <!-- --------------------------- AGRESSOR ----------------------- -->
        <td>Parentesco do agressor com a vítima</td>
        <td>Gênero do agressor</td>
        <td>Descrição do agressor</td>

        <!-- --------------------------- MIDIA ----------------------- -->
        <td>Link para mídia</td>
    </tr>

    @foreach ($denuncias as $denuncia)
    <tr>
        <!-- DADOS DA VITIMA -->
        <td>{{$denuncia->id}}</td>
        <td>{{$denuncia->tipoViolencia->descricao}}</td>
        <td>{{$denuncia->classificacao}}</td>
        <td>{{$denuncia->local_violacao}}</td>
        <td>{{$denuncia->estabelecimento}}</td>
        <td>{{$denuncia->data_violacao}}</td>
        <td>{{$denuncia->descricao_violacao}}</td>
        <td>{{$denuncia->vinculo_institucional}}</td>
        <td>{{$denuncia->tipo_instituicao}}</td>
        <td>{{$denuncia->instituicao}}</td>
  
         <!-- --------------------------- AUTOR ----------------------- -->
         <td>{{$denuncia->autor->id}}</td>
         <td>{{$denuncia->autor->nome}}</td>
         <td>{{$denuncia->autor->rg}}</td>

         <!-- --------------------------- VITIMA ----------------------- -->
         <td>@if(!empty($denuncia->vitima)){{$denuncia->vitima->name}}@endif</td>
         <td>@if(!empty($denuncia->vitima)){{($denuncia->vitima->genre == "M" ? "Masculino" : "Feminino")}}@endif</td>
         
         <!-- --------------------------- AGRESSOR ----------------------- -->
         <td>@if(!empty($denuncia->agressor)){{$denuncia->agressor->relationship}}@endif</td>
         <td>@if(!empty($denuncia->agressor)){{($denuncia->agressor->genre == "M" ? "Masculino" : "Feminino")}}@endif</td>
         <td>@if(!empty($denuncia->agressor)){{$denuncia->agressor->description}}@endif</td>
 
         <!-- --------------------------- MIDIA ----------------------- -->
         <td>@if(!empty($denuncia->midia)){{url('storage/img/'.$denuncia->midia->midia)}}@endif</td>
    </tr>
    @endforeach
</table>