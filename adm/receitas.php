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
            <h1>RECEITAS -
                <a class="btn btn-outline-primary" href="receita-form.php">
                    Nova Receita
                </a>
            </h1>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th class="col-md-2">Ações</th>
                        <th class="col-md-2">Categoria</th>
                        <th class="col-md-1">Data</th>
                        <th class="col-md-1">Foto</th>
                        <th>Título</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $r = new Receita();
                    $receitas = $r->listar();
                    foreach ($receitas as $receita) {

                    ?>
                        <tr>
                            <td>
                                <div class="flex-row">
                                    <!-- mostrar -->
                                    <a class="btn btn-outline-success "
                                     href="receita-show.php?id=<?php echo $receita->id_receita;?>">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                    <!-- editar -->
                                    <a class="btn btn-outline-primary " 
                                       href="receita-form.php?id=<?php echo $receita->id_receita;?>">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <!-- excluir -->
                                    <a class="btn btn-outline-danger " href="#">
                                        <i class="bi bi-trash-fill"></i>
                                    </a>

                                   
                                </div>
                            </td>
                            <td>
                                <?php
                                echo $r->nomeCategoria($receita->id_categoria);
                                ?>
                            </td>
                            <td>
                                <?php
                                echo Helper::dataBrasil($receita->dt);
                                ?>
                            </td>
                            <td>
                                <?php
                                    if($receita->foto !=''){
                                      echo '<img src="../img/'.$receita->foto,'" class="img-thumbnail">';
                                    }
                                ?>
                            </td>
                            <td>
                                <?php
                                echo $receita->titulo;
                                ?>
                            </td>
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