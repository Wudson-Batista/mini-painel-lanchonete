<?php
include('./protect.php')
?>
<!doctype html>
<html lang="pt-br">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="background"></div>
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
                            <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./form-insert.php">Cadastrar Cliente</a>
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
        <div class="container mx-auto banner-container row">
            <div class="col-lg-8 col-md-10 col-sm-11 text-content d-flex flex-column justify-content-center text-center gap-2 row">
                <p class="text-white m-0 fs-5">Lorem ipsum dolor sit amet.</p>
                <h4 class="text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet,
                    assumenda?</h4>
                <button class="col-lg-4 col-md-6 col-8 btn btn-outline-light rounded-pill mx-auto">Saiba Mais</button>
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
</body>

</html>