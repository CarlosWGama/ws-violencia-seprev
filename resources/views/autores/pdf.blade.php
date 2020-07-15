<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Autor - Cod. {{$autor->id}}</title>
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

    <h1 class="principal">Autor de Denúncias</h1>


    <!-- DADOS DO AUTOR -->
    <h2 class="secao">Dados do autor</h2>
    <p><b>Código:</b> {{$autor->id}}</p>
    <p><b>Nome:</b> {{$autor->nome}}</p>
    <p><b>RG:</b> {{$autor->rg}}</p>

    <!-- ENDEREÇO -->
    <h2 class="secao">Endereço</h2>
    <p><b>Rua:</b> {{$autor->rua}}</p>
    <p><b>Número:</b> {{$autor->numero}}</p>
    <p><b>Bairro:</b> {{$autor->bairro}}</p>
    <p><b>Cidade:</b> {{$autor->cidade}}</p>
    <p><b>Estado:</b> {{$autor->estado}}</p>
    <p><b>País:</b> {{$autor->pais}}</p>
    <p><b>Complemento:</b> {{$autor->complemento}}</p>
</body>
</html>