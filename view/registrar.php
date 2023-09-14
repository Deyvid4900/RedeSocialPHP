<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebWorld</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles.css  ">
</head>

<body>
    
    <div class="box-Login">
        <div class="d-flex ">
            <h1 class=" my-5 mx-auto text-white">
                Registrar
            </h1>
        </div>
        <form class="my-5" action="../controller/controller_register.php" method="post">
            <div class="w-50 m-auto">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"><h3>Nome</h3></label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="nName" required aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"><h3>Email</h3></label>
                    <input type="email" class="form-control" required id="exampleInputEmail1" name="nEmail" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text text-white">Nós não compartilharemos o seu email</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"><h3>Password</h3></label>
                    <input type="password" class="form-control" required id="exampleInputPassword1" name="nSenha">
                </div>
                <div class="d-flex justify-content-end"><button type="submit" class="btn btn-primary" value="Incluir">Registrar</button></div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>

</html>