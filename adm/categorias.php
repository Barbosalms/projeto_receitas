<?php
include_once('inc/classes.php');

    if(isset($_POST['btnCadastrar'])){
        $cat = new Categoria();
        $cat->cadastrar($_POST);
        header('location:?ok');
    }

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
            <h1>CATEGORIAS</h1>
            <!-- FORMULARIO -->
            <form action="?" method="post" class="border border-secondary p2 m2">
                <div class="row">
                    <div class="col-md-6 mb-2">
                        <label class="form-label" for="categoria">
                            Categoria
                        </label>
                        <input class="form-control" type="text" 
                        name="categoria" id="categoria" value="" required>
                    </div>
                    <div class="col-md-2">
                        <input class="btn btn-outline-success mt-4" type="submit"
                        name="btnCadastrar" id="btnCadastrar"  value="Cadastrar">
                    </div>
                </div>
            </form>
            <!-- /FORMULARIO -->
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th class="col-md-1">Ações</th>
                        <th class="col-md-1">ID</th>
                        <th>Categoria</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $objCategoria = new Categoria();
                    $categorias = $objCategoria->listar();
                    foreach ($categorias as $categoria) {
                    ?>
                        <tr>
                            <td>
                                <a class="btn btn-outline-primary mr-1" 
                                 href="categoria-editar.php?id=<?php echo $categoria->id_categoria; ?>"
                                >
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a class="btn btn-outline-danger" 
                                href="categoria-excluir.php?id=<?php echo $categoria->id_categoria; ?>">
                                    <i class="bi bi-trash-fill"></i>
                                </a>
                            </td>
                            <td><?php echo $categoria->id_categoria; ?></td>
                            <td><?php echo $categoria->categoria; ?></td>
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