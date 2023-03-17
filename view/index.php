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
    <title>My Animes</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6 position">
                <form method="POST" action="../control/controlUser.php" class="row g-3 position">
                <div class="row mb-3">
                    <label for="nome" class="col-sm-2 col-form-label color" >Nome:</label>
                    <input type="text" name="nome" id="nome" class="form-control" placeholder="Insira o nome de usuário.">
                </div>
                <div class="row mb-3">
                    <label for="senha" class="col-sm-2 col-form-label">Senha:</label>
                    <input type="password" name="senha" id="senha" class="form-control" placeholder="Insira a senha.">
                </div>
                <?php 
                    session_start();
                    if(isset($_SESSION['error'])){
                        echo "<div class='row mb-6'>".$_SESSION['error']."</div>";
                    } 
                ?>
                <div class="col-sm-3"></div>
                <button type="submit" name="opcao" value="login" class="btn btn-success col-sm-6">Entrar</button>
                <div class="col-sm-3"></div>
                </form>
                <div class="col-sm-3"></div>
                <p>Ainda não tem sua conta? Então aproveite e <a href="../control/controlUser.php?opcao=cadastrarConta">crie</a> agora mesmo.</p>
            <div class="col-3"></div>
            </div>
        </div>
    </div> 
</body>
</html>