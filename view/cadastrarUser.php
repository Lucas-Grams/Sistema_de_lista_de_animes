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
    <title>Cadastrar Usuário</title>
</head>
<body>
    <div class="container">
        <div class="header">
        <nav class="navbar bg-light">
            <div class="container-fluid">
            <h1 class="navbar-brand">Crie sua conta:</a>
            </div>
        </nav>
        </div>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6 position">
            <form method="POST" action="../control/controlUser.php" class="row g-3">
                <div class="row mb-3">
                <label for="nome" class="col-sm-2 col-form-label" >Nome:</label>
                <input type="text" name="nome" id="nome" class="form-control" required="required" placeholder="Insira o nome que será usado para login.">
                </div>
                <div class="row mb-3">
                <label for="senha" class="col-sm-2 col-form-label">Senha:</label>
                <input type="password" name="senha" id="senha" class="form-control" required="required" placeholder="Insira a senha que será usada para login.">
                </div>
                <div class="row mb-3">
                    <label for="confirmsenha" class="col-sm-4 col-form-label">Confirme sua senha:</label>
                    <input type="password" name="confirmsenha" id="confirmsenha" class="form-control" required="required" placeholder="Insira a senha anteriormente utilizada.">
                </div>
                <?php 
                    session_start();
                    if(isset($_SESSION['error_name'])){
                        echo "<div class='row mb-3'>".$_SESSION['error_name']."</div>";
                    }
                    if(isset($_SESSION['errorkey'])){
                        echo "<div class='row mb-3'>".$_SESSION['errorkey']."</div>";
                    } 
                ?>
                <button type="submit" name="opcao" value="cadastrar" class="btn btn-info col-sm-5">Cadastrar</button>
                <div class="col-sm-2"></div>
                <a href="../view/index.php" class="btn btn-danger col-sm-5">Voltar</a>
            </form>
            <div class="col-3"></div>
        </div>
        </div>
    </div>
</body>
</html>