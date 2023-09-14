<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebWorld</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./home.css">
</head>

<body>
    <?php
    require_once "../../Model/config.php";
    $PDO = conecta_bd();
    session_start();
    ?>
    <div class="content ">
        <div class="box-1 d-flex flex-column ">
            <div class="mx-auto my-5">
                <button class="reset_btn my-5">
                    <div class="rounded-circle  divPerfil">
                    </div>
                </button>
            </div>
            <div class="btnSide btn">Home</div>
            <div class="btnSide btn">Mensagens</div>
            <div class="btnSide btn">Perfil</div>

            <div class="btnSide btn" id="btn_Sair">Sair</div>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary w-50 mx-auto" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Postar</button>
        </div>
        <div class="box-2">
            <div class="">
                <div class="p-3">
                    <h1>
                        Postagens
                    </h1>
                </div>
            </div>
            <?php



            $stmt_count = $PDO->prepare("SELECT COUNT(*) as total FROM comentarios");
            $stmt_count->execute();
            $stmt = $PDO->prepare("SELECT nomeUsuario,comentario From comentarios ORDER BY codComentario DESC");
            $stmt->execute();
            $total = $stmt_count->fetchColumn();
            if ($total > 0) : ?>
                <div>
                    <?php while ($resultado = $stmt->fetch(PDO::FETCH_ASSOC)) : {
                            echo '<ul>';
                            echo '<li><h4>'.$resultado['nomeUsuario'].'</h4>'.$resultado['comentario']."<br></li>";
                            echo '</ul>';
                        }
                    ?>
                    <?php endwhile; ?>
                </div>
            <?php else : ?>

            <?php endif; ?>


        </div>
        <div class="box-3 d-flex flex-column ">
            <div class="mx-auto d-flex  flex-wrap">
                <h3 class="text-wrap">Tambem no WebWorld</h3>

                <?php
                $stmt_count = $PDO->prepare("SELECT COUNT(*) as total FROM usuarios");
                $stmt_count->execute();
                $stmt = $PDO->prepare("SELECT nomeUsuario From usuarios ORDER BY nomeUsuario");
                $stmt->execute();
                $total = $stmt_count->fetchColumn();
                if ($total > 0) : ?>
                    <div>
                        <?php while ($resultado = $stmt->fetch(PDO::FETCH_ASSOC)) :
                            echo "<br><h4 class='nEstilo w-auto'>" . $resultado['nomeUsuario'] . "</h4><br>";
                        ?>
                        <?php endwhile; ?>
                    </div>
                <?php else : ?>
                    <p>Nada a mostrar</p>
                <?php endif; ?>






            </div>
        </div>

    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-flex align-items-center ">
                        <div class="fotoPerfil divPerfil rounded-circle ">
                        </div>
                        <div>
                            <?php echo  $_SESSION['username'] ?>
                        </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="../../controller//controller_post.php" method="post">
                    <div class="modal-body">

                        <div class="mb-3">

                            <h1 class="modal-title fs-5" id="exampleModalLabel">Nova Postagem</h1>
                            <br>
                            <textarea class="form-control" name="nPost" id="message-text"></textarea>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancelar</button>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js">
        const myModal = document.getElementById('myModal');
        const myInput = document.getElementById('myInput');
        myModal.addEventListener('shown.bs.modal', () => {
            myInput.focus()
        })
    </script>
    <script>
        const btn_Sair = document.getElementById('btn_Sair');

        

        btn_Sair.addEventListener('click', function() {
            console.log('ok');
            window.location.href = '../../index.php'; 
        });
    </script>
</body>

</html>