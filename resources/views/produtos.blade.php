<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listagem de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-primary mb-3" data-bs-theme="dark">
  <div class="container">
    <a class="navbar-brand" href="#">Acampamento Dev</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0"> {{$tituloDaPagina}} </h5>
                </div>
                <div class="card-body">

                    @if (count($produtos) > 5)
                    <div class="alert alert-danger">Cuidado!!!</div>
                    @endif

                    <ul class="list-group">
                    @foreach ($produtos as $produto)
                        <li class="list-group-item"> {{$produto}} </li>
                    @endforeach
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>
