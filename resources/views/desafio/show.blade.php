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
<link rel="stylesheet" href="css/style.css">

</head>
<body>

    <main class="page-wrapper mt-4">
        <div class="container py-5 mt-4 mt-lg-5 mb-lg-4 my-xl-5">
            <div class="row pt-sm-2 pt-lg-0">

                <div class="col-lg-12 pt-4 pb-2 pb-sm-4">
                    <div class="d-flex align-items-center">
                        <H1>Edição do {{$cadastro->name}}</H1>
                    </div><br>

                    <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">

                            <form action="/api/app/update/{{/* $eletro->id */}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-3 container">
                                    <label class="form-label" for="user_id">Nome do Eletrodomestico:</label>
                                    <input class="form-control" type="text" name="name" id="name" value="{{ /*$eletro->name*/}}">

                                    <label class="form-label" for="titulo">Descrição:</label>
                                    <input class="form-control" name="description" id="description" cols="15" rows="10" value="{{/* $eletro->description*/}}">

                                    <br>
                                    <label class="form-label" for="image">Imagem:</label>
                                    <input class="form-control-file" type="file" name="image" id="image" value="{{ /*$eletro->image*/}}"><br>
                                    <img src="/img/eletros/{{/* $eletro->image*/}}" alt="{{/* $eletro->name*/}}" width="300px" height="300px">
                                    <br>
                                    <br>
                                    <label class="form-label" for="regulation">Marca:</label>
                                    <input class="form-control" type="text" name="marca" id="marca" value="{{ /*$eletro->marca*/}}">

                                    <br>
                                    <label class="form-label" for="comission">Tensão:</label>
                                    <input class="form-control" type="text" name="tensaov" id="tensaov" value="{{/* $eletro->tensaov*/}}">

                                    <div class="col-12 d-flex justify-content-end pt-3">
                                        <button class="btn btn-primary ms-3" type="submit">Editar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>

</body>
</html>
