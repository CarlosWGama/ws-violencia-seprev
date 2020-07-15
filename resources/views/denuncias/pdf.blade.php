<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ocorrência - Cod. {{$denuncia->id}}</title>
    <style>
        .secao {
            text-align: center;
            font-size: 20px
        }
        .principal {
            text-align: center;
            text-transform: uppercase;
        }
    </style>
</head>
<body>

    <h1 class="principal">Denúncias</h1>


    <!-- DADOS DA DENUNCIA -->
    <h2 class="secao">Dados da Denuncia</h2>
    <p><b>Código:</b> {{$denuncia->id}}</p>
    <p><b>Tipo Violação:</b> {{$denuncia->tipoViolencia->descricao}}</p>
    <p><b>Classificação:</b> {{$denuncia->classificacao}}</p>
    <p><b>Local da Violação:</b> {{$denuncia->local_violacao}}</p>
    <p><b>Estabelecimento:</b> {{$denuncia->estabelecimento}}</p>
    <p><b>Data da Violação:</b> {{$denuncia->data_violacao}}</p>
    <p><b>Descrição:</b> {{$denuncia->descricao_violacao}}</p>
    <p><b>Vínculo Institucional:</b> {{$denuncia->vinculo_institucional}}</p>
    <p><b>Tipo Instituição:</b> {{$denuncia->tipo_instituicao}}</p>
    <p><b>Instituição:</b> {{$denuncia->instituicao}}</p>

    <!-- DADOS DO AUTOR ENDEREÇO -->
    <h2 class="secao">Dados do autor</h2>
    <p><b>Autor ID:</b> {{$denuncia->autor->id}}</p>
    <p><b>Nome:</b> {{$denuncia->autor->nome}}</p>
    <p><b>RG:</b> {{$denuncia->autor->rg}}</p>
    
    @if(!empty($denuncia->vitima))
    <!-- DADOS DA VITIMA -->
    <h2 class="secao">Dados da suposta vítima</h2>
    <p><b>Nome:</b> {{$denuncia->vitima->name}}</p>
    <p><b>Gênero:</b> {{($denuncia->vitima->genre == "M" ? "Masculino" : "Feminino")}}</p>
    @endif

    @if(!empty($denuncia->agressor))
    <!-- DADOS DO SUPOSTO AGRESSOR -->
    <h2 class="secao">Dados do suposto agressor</h2>
    <p><b>Parentesco com a vítima:</b> {{$denuncia->agressor->relationship}}</p>
    <p><b>Gênero:</b> {{($denuncia->agressor->genre == "M" ? "Masculino" : "Feminino")}}</p>
    <p><b>Descrição:</b> {{$denuncia->agressor->description}}</p>
    @endif
  
    @if(!empty($denuncia->midia))
    <!-- DADOS DO SUPOSTO AGRESSOR -->
    <h2 class="secao">Mídia</h2>
    <p><b>Link para mídia:</b> {{url('storage/img/'.$denuncia->midia->midia)}}</p>
    @endif
</body>
</html>