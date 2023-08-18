<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="/css/style.css">
    <title>Desafio PbSoft</title>
</head>
<body>

    <div class="table-title">
        <div class="row">
            <div class="col-sm-6">
                <a  class="logo" href="/">
                    <h2>Pb<b>Soft</b></h2>
                </a>
            </div>
        </div>
    </div>

      <div>
        <ul class="list-group">
            <li class="list-group-item">Nome : {{$cadastro->name}}  #{{$cadastro->id}}</li>
            <li class="list-group-item"> CPF ou CNPJ : {{$cadastro->cpf_cnpj}}</li>
            <li class="list-group-item">Data de Nscimento : {{$cadastro->data}}</li>
            <li class="list-group-item">Imagem : {{$cadastro->image}}</li>
            <li class="list-group-item">Nome Social : {{$cadastro->name_social}}</li>

          </ul>
      </div>

      <div>
        <a href="/desafio/edit/{{$cadastro->id}}" class="btn btn-primary custom-btn"><span class="material-symbols-outlined">
            edit
            </span></a>
        <form action="/desafio/{{ $cadastro->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger delete-btn"><span class="material-symbols-outlined">
            delete
            </span></button>
        </form>

      </div>
</body>
</html>
