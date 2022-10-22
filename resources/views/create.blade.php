<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <h1>Funcionando</h1>
    <div class="conteiner">
        <form action="{{ route('clientes-salvar')}}" method="POST">
            @csrf
            <div class="form-group">
                <div class="form-group">
                    <input type="text" class="form-control" name="nome" placeholder="Digite seu nome">
                </div>
                <br>
                <div class="form-group">
                    <input type="text" class="form-control" name="email" placeholder="Digite seu email">
                </div>
                <br>
                <div class="form-group">
                    <input type="text" class="form-control" name="telefone" placeholder="Digite seu telefone">
                </div>
                <br>
                <div class="form-group">
                    <input type="text" class="form-control" name="endereco" placeholder="Digite seu endereço">
                </div>
                <br>
                <div class="form-group">
                    <input type="date" class="form-control" name="data_nasci">
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" name="submit">
                </div>
            </div>
        </form>
    </div>
</body>
</html>