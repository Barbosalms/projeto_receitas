<?php
include_once('inc/classes.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área Administrativa</title>
    <!-- CSS/ JS -->
    <?php
    include_once('inc/css.php');
    include_once('inc/js.php');
    ?>
    <!-- /CSS/ JS -->


</head>

<body>
    <div class="container">
        <!-- MENU -->
        <?php include_once('inc/menu-adm.php'); ?>
        <!-- /MENU -->
        <!-- PRINCIPAL -->
        <div class="row">
            <h1>
                <i class="fa-solid fa-user"></i>
                Usuários -
                <a class="btn btn-outline-primary" href="usuario-form.php">
                    Novo Usuário
                </a>
            </h1>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th class="col-md-2">Ações</th>
                        <th class="col-md-1">ID</th>
                        <th>Nome</th>
                        <th>E-mail</th>                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $u = new Usuario();
                    $usuarios = $u->listar();
                    foreach ($usuarios as $usuario) {
                    ?>
                        <tr>
                            <td>
                                <div class="flex-row">
                                    <!-- mostrar -->
                                    <a class="btn btn-outline-success " href="usuario-show.php?id=<?php echo $usuario->id_usuario; ?>">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                    <!-- editar -->
                                    <a class="btn btn-outline-primary " href="usuario-form.php?id=<?php echo $usuario->id_usuario; ?>">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <!-- excluir -->
                                    <a class="btn btn-outline-danger " href="#">
                                        <i class="bi bi-trash-fill"></i>
                                    </a>


                                </div>
                            </td>
                            <td><?php echo $usuario->id_usuario;?></td>
                            <td><?php echo $usuario->nome; ?></td>
                            <td><?php echo $usuario ->email; ?>                            
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <!-- /PRINCIPAL -->
        <!-- RODAPE -->
        <div class="row">
            rodapé
        </div>
        <!-- /RODAPE -->
    </div>




</body>

</html>