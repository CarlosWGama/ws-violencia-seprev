<table border="1">
    <!-- CABECALHO -->
    <tr>
        <td>Código</td>
        <td>Nome</td>
        <td>RG</td>
        <!-- --------------------------- ENDEREÇO ----------------------- -->
        <td>Rua</td> 
        <td>Endereço</td> 
        <td>Número</td> 
        <td>Bairro</td> 
        <td>Cidade</td> 
        <td>Estado</td> 
        <td>País</td> 
        <td>Complemento</td> 
    </tr>

    @foreach ($autores as $autor)
    <tr>
        <!-- DADOS DA VITIMA -->
        <td>{{$autor->id}}</td>
        <td>{{$autor->nome}}</td>
        <td>{{$autor->rg}}</td>   
        <!-- --------------------------- ENDEREÇO ----------------------- -->
        <td>{{$autor->rua}}</td>
        <td>{{$autor->endereco}}</td>
        <td>{{$autor->numero}}</td>
        <td>{{$autor->bairro}}</td>
        <td>{{$autor->estado}}</td>
        <td>{{$autor->pais}}</td>
        <td>{{$autor->complemento}}</td>
    </tr>
    @endforeach
</table>