<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/js.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <?php
        session_start();
        if(!isset($_SESSION["nome"])){
            header("Location:../view/index.php");
        }
    ?>
    <title>Lista de Animes</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <h1 class="navbar-brand">Bem vindo a sua lista de animes <?=$_SESSION['nome']?></h1>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav"></div>
            </div>
        </nav>
        <div class="row">
            <div class="col-3"></div>
                <div class="col-6 position">
                    <h3>Oque vamos realizar neste momento?</h3>
                    <a href="./addAnimes.php"><button class="btn btn-success col-sm-4">Inserir Animes</button></a>
                    <br><br>
                    <a href="./myAnimes.php"><button class="btn btn-info col-sm-4">Mostrar Meus Animes</button></a>
                    <br><br>
                    <a href="../control/controlUser.php?opcao=sair"><button class="btn btn-danger col-sm-4">Sair</button></a>
                </div>
            <div class="col-3"></div>
        </div>
    </div>
</body>
</html>