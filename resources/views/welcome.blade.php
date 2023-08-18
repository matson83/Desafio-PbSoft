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
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
                        <a  class="logo" href="/">
                            <h2>Pb<b>Soft</b></h2>
                        </a>
					</div>
					<div class="col-sm-6">
						<a href="/desafio/create/" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Adicionar Dados</span></a>

					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>

						<th>Imagem</th><br>
						<th>CPF / CNPJ</th>
						<th>Nome</th>
						<th>Nome Social</th>
						<th>Data de Nascimento:</th>
					</tr>
				</thead>
				<tbody>

						@foreach ($cadastros as $cadastro)
                        <tr>
                            <td><img src="img/cadastro/{{$cadastro->image}}" width="100px" alt=""></td>
                            <td>{{$cadastro->cpf_cnpj}}</td>
                            <td>{{$cadastro->name}}</td>
                            <td>{{$cadastro->name_social}}</td>
                            <td>{{$cadastro->data}}</td>

                            <td>
                                <a href="/desafio/{{$cadastro->id}}" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" >&#xE254;</i></a>

                            </td>

                        </tr>
                        @endforeach



				</tbody>
			</table>

		</div>
	</div>
</div>
</body>
</html>
