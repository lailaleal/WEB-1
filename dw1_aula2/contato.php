<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">LAUNCH</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contato.php">Contato</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <h2>Entre em contato</h2>
            <p>Preencha o formulário a seguir para entrar em contato com a nossa empresa</p>
            <form action="#" method="post">
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label for="id-nome" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="id-nome" name="campo-nome">
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label for="id-email" class="form-label">E-mail:</label>
                        <input type="email" class="form-control" id="id-email" name="campo-email">
                    </div>

                    <div class="col-lg-3 col-md-6 mb-3">
                        <label for="id-cpf" class="form-label">CPF:</label>
                        <input type="text" class="form-control" id="id-cpf" name="campo-cpf">
                    </div>

                    <div class="col-lg-3 col-md-6 mb-3">
                        <label for="id-rg" class="form-label">RG:</label>
                        <input type="text" class="form-control" id="id-rg" name="campo-rg">
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
                        <label for="id-nascimento" class="form-label">Data de Nascimento:</label>
                        <input type="date" class="form-control" id="id-nascimento" name="campo-nascimento">
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
                        <label for="id-hora" class="form-label">Horário:</label>
                        <input type="time" class="form-control" id="id-hora" name="campo-hora">
                    </div>

                    <div class="col-lg-12 mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Example text area</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <footer>
        <div class="container-fluid bg-danger-subtle">
            <div class="row mt-4">
                <div class="col-12 text-center mt-4">
                    <div class="h5">Informações da empresa
                        <p>Telefone: +55 34 99230 1000</p>
                    </div>
                </div>
            </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>