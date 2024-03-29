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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="./fontawesome/css/all.min.css">

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="position-relative">
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent py-3">
            <div class="container mx-auto gap-5">
                <a class="navbar-brand" href="#"><img src="./renato_logo.png" alt="" style="width: 120px;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-3">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="./index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./form-insert.php">Cadastrar Cliente</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="./form-select.php">Pesquisar Cliente</a>
                        </li>
                    </ul>
                    <form class="d-flex justify-content-center gap-3 align-items-center">
                        <p class="text-white m-0 fs-5">
                            <?php
                        echo $_SESSION['user'];
                        ?>
                        </p>
                        <a href="./logout.php" class="btn btn-danger rounded-pill px-4">Sair</a>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main class="row">
        <div class="card card-cadastro p-3 col-md-6 col-sm-10 col-11 mx-auto border-0 shadow-lg rounded-4 mb-4">
            <h2 class="card-title text-center">Buscar Cliente</h2>
            <div class="card-body px-sm-3 px-1">
                <form id="form-select" action="" method="post" class="mt-2 d-flex flex-column gap-4" name="form">
                    <div class="form-element-wrapper row row-cols-1 row-cols-sm-2 gap-4 gap-sm-0 align-items-center">
                        <div class="form-element col col-md-8 col-sm-8 ">
                            <input type="text" class="form-control rounded-pill"
                                placeholder="Informe um nome para busca" required name="search_select"
                                id="search_select" autofocus>
                        </div>
                        <div class="form-element col-md-4 col-sm-4 col">
                            <button id="action" type="submit" name="action_cadastrar"
                                class="w-100 btn btn-success rounded-pill text-white d-flex gap-2 align-items-center justify-content-center">
                                <span class="text-white"><i class="fas fa-search"></i></span>
                                <span class="btn-text">Buscar</span>
                            </button>
                        </div>
                    </div>
                    <div class="form-element-wrapper d-none row row-cols-1 row-cols-sm-2 gap-4 gap-sm-0">
                        <div class="form-element col-lg-2 col-md-3 col-sm-4 col-5">
                            <label for="id_select" class="form-label m-0 ms-2">ID:</label>
                            <input type="text" class="w-100 form-control rounded-pill" placeholder="ID" name="id_select"
                                id="id_select" disabled>
                        </div>
                        <div class="form-element col col-md-10">
                            <label for="nome_select" class="form-label m-0 ms-2">Nome:</label>
                            <input type="text" class="form-control rounded-pill" placeholder="Nome" name="nome_select"
                                id="nome_select">
                        </div>
                    </div>

                    <div class="form-element-wrapper d-none row row-cols-1 row-cols-sm-2 gap-4 gap-sm-0">
                        <div class="form-element col">
                            <label for="email_select" class="form-label m-0 ms-2">Email:</label>
                            <input type="email" class="w-100 form-control rounded-pill" placeholder="Email"
                                name="email_select" id="email_select">
                        </div>
                        <div class="form-element col">
                            <label for="telefone_select" class="form-label m-0 ms-2">Telefone:</label>
                            <input type="tel" class="w-100 form-control rounded-pill" placeholder="Telefone"
                                name="telefone_select" id="telefone_select">
                        </div>
                    </div>
                    <div class="form-element-wrapper d-none row row-cols-2 row-cols-sm-2">
                        <div class="form-element col col-sm-3">
                            <label for="numero_select" class="form-label m-0 ms-2">Nº:</label>
                            <input type="number" class="form-control rounded-pill" placeholder="Nº" name="numero_select"
                                id="numero_select">
                        </div>
                        <div class="form-element col col-sm-3">
                            <label for="uf_select" class="form-label m-0 ms-2">UF:</label>
                            <select class="form-select rounded-pill" id="uf_select" name="uf_select">
                                <option value="" disabled selected>UF</option>
                                <option value="rj">RJ</option>
                                <option value="sp">SP</option>
                                <option value="rs">RS</option>
                            </select>
                        </div>
                        <div class="form-element col-12 col-sm-6 mt-sm-0 mt-4">
                            <label for="cep_select" class="form-label m-0 ms-2">CEP:</label>
                            <input type="text" class="w-100 form-control rounded-pill" placeholder="CEP"
                                name="cep_select" id="cep_select">
                        </div>
                    </div>

                    <div class="form-element-wrapper d-none row row-cols-1 row-cols-sm-2 gap-4 gap-sm-0">
                        <div class="form-element col">
                            <label for="rua_select" class="form-label m-0 ms-2">Rua:</label>
                            <input type="text" class="form-control rounded-pill" placeholder="Rua" name="rua_select"
                                id="rua_select">
                        </div>
                        <div class="form-element col">
                            <label for="bairro_select" class="form-label m-0 ms-2">Bairro:</label>
                            <input type="text" class="w-100 form-control rounded-pill" placeholder="Bairro"
                                name="bairro_select" id="bairro_select">
                        </div>
                    </div>

                    <div class="form-element-wrapper d-none row">
                        <div class="form-element col">
                            <label for="cidade_select" class="form-label m-0 ms-2">Cidade:</label>
                            <input type="text" class="form-control rounded-pill" placeholder="Cidade"
                                name="cidade_select" id="cidade_select">
                        </div>
                    </div>

                    <div class="form-element w-100 d-flex justify-content-between row text-center">
                        <div class="col d-flex justify-content-center">
                            <button id="action_deletar" name="action_deletar"
                                class="btn text-danger mt-2 d-flex flex-column justify-content-center p-2" disabled>
                                <span class="mx-auto"><i class="fas fa-trash-alt fs-2"></i></span>
                                <span>Excluir</span>
                            </button>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <button id="action_editar" name="action_editar"
                                class="btn text-info mt-2 d-flex flex-column justify-content-center" disabled>
                                <span class="mx-auto"><i class="fas fa-user-edit fs-2"></i></span>
                                <span>Editar</span>
                            </button>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <button id="action_clear" name="action_editar"
                                class="btn text-danger mt-2 d-flex flex-column justify-content-center" disabled>
                                <span class="mx-auto">
                                    <i class="fas fa-times-circle fs-2"></i>
                                </span>
                                <span>Limpar</span>
                            </button>
                        </div>
                        <!-- <div class="col">
                            <button id="action" type="submit" name="action_cadastrar"
                                class="w-100 btn btn-success rounded-pill mt-2 text-white d-flex gap-2 align-items-center justify-content-center">
                                <span class="text-white"><i class="fas fa-search"></i></span>
                                <span>Buscar</span></button>
                        </div> -->
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>

    <script src="./js/jquery.min.js"></script>
    <script src="./js/resize.js"></script>
    <script src="./js/request-select.js"></script>
    <script src="./js/jquery-mask/jquery.mask.min.js"></script>
    <script src="./js/mask.js"></script>

</body>

</html>