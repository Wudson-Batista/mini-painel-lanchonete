<?php
include('./protect.php')
?>
<!doctype html>
<html lang="pt-br">

<head>
    <title>Title</title>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="position-relative">
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent py-3">
            <div class="container mx-auto gap-5">
                <a class="navbar-brand" href="#"><img src="./renato_logo.png" alt="" style="width: 120px;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-3">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="./index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="./form-insert.php">Cadastrar Cliente</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./form-select.php">Pesquisar Cliente</a>
                        </li>
                    </ul>
                    <form class="d-flex justify-content-center gap-3 align-items-center">
                        <p class="text-white m-0 fs-5"><?php
                                                        echo $_SESSION['user'];
                                                        ?></p>
                        <a href="./logout.php" class="btn btn-danger rounded-pill px-4">Sair</a>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="card card-cadastro p-3 col-md-6 col-sm-10 col-11 mx-auto border-0 shadow-lg rounded-4 mb-4">
            <h2 class="card-title text-center">Cadastrar Cliente</h2>
            <div class="card-body">
                <form id="form" method="post" class="mt-2 d-flex flex-column gap-4" name="form">
                    <div class="form-element-wrapper row row-cols-1 row-cols-sm-2 gap-4 gap-sm-0">
                        <div class="form-element col">
                            <input type="text" class="form-control rounded-pill" placeholder="Nome" required name="nome_cadastro" autofocus>
                        </div>
                        <div class="form-element col">
                            <input type="tel" class="w-100 form-control rounded-pill" placeholder="Telefone" required name="telefone_cadastro" id="telefone_cadastro">
                        </div>
                    </div>
                    <div class="form-element-wrapper">
                        <div class="form-element">
                            <input type="email" class="w-100 form-control rounded-pill" placeholder="Email" required name="email_cadastro">
                        </div>
                    </div>
                    <div class="form-element-wrapper row row-cols-2 row-cols-sm-2">
                        <div class="form-element col col-sm-3">
                            <input type="number" class="form-control rounded-pill" placeholder="Nº" required name="numero_cadastro">
                        </div>
                        <div class="form-element col col-sm-3">
                            <select class="form-select rounded-pill" id="" required name="uf_cadastro">
                                <option value="" disabled selected>UF</option>
                                <option value="rj">RJ</option>
                                <option value="sp">SP</option>
                                <option value="rs">RS</option>
                            </select>
                        </div>
                        <div class="form-element col-12 col-sm-6 mt-sm-0 mt-4"">
                            <input type=" text" class="w-100 form-control rounded-pill" required placeholder="CEP" name="cep_cadastro" id="cep_cadastro">
                        </div>
                    </div>

                    <div class="form-element-wrapper row row-cols-1 row-cols-sm-2 gap-4 gap-sm-0">
                        <div class="form-element col">
                            <input type="text" class="form-control rounded-pill" placeholder="Rua" required name="rua_cadastro">
                        </div>
                        <div class="form-element col">
                            <input type="text" class="w-100 form-control rounded-pill" required placeholder="Bairro" name="bairro_cadastro">
                        </div>
                    </div>
                    <div class="form-element-wrapper row">
                        <div class="form-element col">
                            <input type="text" class="form-control rounded-pill" required placeholder="Cidade" name="cidade_cadastro">
                        </div>
                    </div>

                    <div class="row d-flex justify-content-end">
                        <div class="col-lg-4  col-sm-6 col-8 form-element">
                            <button id="action" type="submit" name="action_cadastrar" class="btn btn-danger rounded-pill w-100 mt-2">Cadastrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>

    <script src="./js/jquery.min.js"></script>
    <script src="./js/request.js"></script>
    <script src="./js/jquery-mask/jquery.mask.min.js"></script>
    <script src="./js/mask.js"></script>

</body>

</html>