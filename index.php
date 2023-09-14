<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebWorld</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php
        require_once "../../ProjetoRedeSocialPHP/RedeSocialPHP/Model/config.php";
        
        $PDO = conecta_bd();
    ?>
    <div class="box-Login">
        <div class="d-flex  ">
            <h1 class=" my-5 mx-auto text-white">
                Login
            </h1>
        </div>
        <form class="py-5" action="../../ProjetoRedeSocialPHP/RedeSocialPHP/controller/controller_login.php" method="post">
            <div class="w-100 px-5 m-auto ">
                <div class="mb-3 Inputs">
                    <label for="exampleInputEmail1" class="form-label">
                        <h3>Nome</h3>
                    </label>
                    <input type="text" class="form-control   " id="exampleInputEmail1" name="nName" required aria-describedby="emailHelp">
                </div>
                <div class="mb-3 Inputs">
                    <label for="exampleInputPassword1" class="form-label">
                        <h3>Senha</h3>
                    </label>
                    <input type="password" class="form-control " required id="exampleInputPassword1" name="nSenha">
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <a href="./view/registrar.php" class="mx-5">Criar Conta</a>
                    <button type="submit" class="btn btn-primary " value="Incluir">entrar</button>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>

</html>