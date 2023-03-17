<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <?php 
        include('../model/crudAnimes.php');
        session_start();
        if(!isset($_SESSION["nome"])){
            header("Location:../view/index.php");
        }
    ?>
    <title>Editar Animes</title>
</head>
<body>
    <div class="container">
    <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <h1 class="navbar-brand">Vamos Atualizar Qual Anime Hoje <?=$_SESSION['nome']?> ?</h1>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav"></div>
            </div>
        </nav>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6 position">
                <form method="post" action="../control/controlAnimes.php" class="row g-3 position">
                    <?php $result = searchAnime($_GET['id'])?>
                    <input type="hidden" name="id" value="<?=$_GET['id'];?>" >
                    <div class="row mb-3">
                        <label for="nameAnime"  class="col-sm-6 col-form-label">Nome do Anime:</label>
                        <input type="text" name="nameAnime" class="form-control" value="<?=$result['name_anime']?>" id="nameAnime">
                    </div>
                    <div class="row mb-3">
                        <label for="qtdEp"  class="col-sm-6 col-form-label">Quantos episódios o Anime tinha?</label>
                        <input type="text" name="qtdEp" class="form-control" value="<?=$result['qtd_ep']?>" id="qtdEp">
                    </div>
                    <div class="col-sm-3"></div>
                    <button class="btn btn-success col-sm-6" type="submit" name="opcao" value="edit" onclick="masked()">Editar</button>
                    <div class="col-sm-3"></div>
                </form>
                <div class="col-3"></div>
            </div>
        </div>
    </div>
    <script src="../js/js.js"></script>
    <script>function masked() {
        var n = document.getElementById("qtdEp").value.length;
  document.getElementById("qtdEp").value =
    document.getElementById("qtdEp").value + " Episódios";
    if(n == 0){
        document.getElementById("qtdEp").value = "Não cadastrado.";
    }
}
</script>
</body>
</html>