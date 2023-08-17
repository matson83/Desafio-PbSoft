<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Desafio PbSoft</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/css/style.css">

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

    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="d-flex align-items-center">
            <form action="/desafio" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 container">
                    <label class="form-label" for="name">Nome:</label>
                    <input class="form-control" type="text" name="name" id="name" required>

                    <label class="form-label" for="descrition">Data de Nascimento:</label>
                    <input class="form-control" name="data" placeholder="00/00/0000" id="data" cols="15" rows="10" required>
                    <br>

                    <label class="form-label" for="image">Imagem:</label>
                    <input class="form-control-file" type="file" name="image" id="image">
                    <br>


                    <br>
                    <label class="form-label" for="tensaov">CPF OU CNPJ:</label>
                    <input class="form-control" name="cpf_cnpj" id="cpf_cnpj"  cols="15" rows="10" required>

                    <br>
                    <label class="form-label" for="marca">Nome Social:</label>
                    <input class="form-control" name="name_social" id="name_social"  cols="15" rows="10" >

                    <div class="col-12 d-flex justify-content-end pt-3">
                        <button class="btn btn-success ms-3" type="submit">Salvar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>



</body>
</html>
