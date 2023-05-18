<?php
include_once('inc/classes.php');

if (isset($_POST['btnCadastrar'])) {

    $r = new Receita();
    $r->cadastrar($_POST,$_FILES['foto']);
    header('location:receitas.php');
}

if (isset($_POST['btnEditar'])) {
    $r = new Receita();
    $r->editar($_POST['id_receita'],$_POST, $_FILES['foto']);
    header('location:receitas.php');
}

// Verificar se um ID RECEITA foi enviado por GET
if (isset($_GET['id']) && $_GET['id'] != '') {
    $objR = new Receita();
    $receita = $objR->mostrar($_GET['id']);
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
            <h1>
            <i class="fa-solid fa-bowl-food"></i> 
                <?php
                if (isset($receita) && $receita !='') {
                    echo 'Editar ';
                    $formEdicao = true;
                } else {
                    echo 'Cadastrar ';
                    $formEdicao = false;
                }
                ?>
                Receita
            </h1>

            <form action="?" method="post" enctype="multipart/form-data">
                <!-- campos ocultos -->
                <?php
                    if ($formEdicao) {
                ?>
                    <input type="hidden" name="id_receita" value="<?php echo $receita->id_receita;?>">
                    <input type="hidden" name="foto_atual" value="<?php echo $receita->foto;?>">
                <?php 
                    }
                ?>
                <!-- /campos ocultos -->
                <div class="row">
                    <div class="col-md-3">
                        <label class="form-label" for="id_categoria">Categoria*</label>
                        <select class="form-select" name="id_categoria" id="id_categoria" required>
                            <option value="">Selecione</option>
                            <?php
                            $objCategoria = new Categoria();
                            $categorias = $objCategoria->listar();
                            foreach ($categorias as $categoria) {
                                echo '<option value="' . $categoria->id_categoria . '"';
                                if( $formEdicao &&
                                    $receita->id_categoria ==  $categoria->id_categoria
                                  ){
                                    echo 'selected="selected" ';
                                }
                                echo '>';
                                echo $categoria->categoria;
                                echo '</option>';
                            }
                            ?>                           

                        </select>
                    </div>
                    <div class="col-md-9">
                        <label class="form-label" for="titulo">Título*</label>
                        <input class="form-control" 
                        type="text" 
                        name="titulo" id="titulo" 
                        placeholder="Ex.: Bolo de abacaxi com creme de leite" 
                        value="<?php ($formEdicao)? print $receita->titulo :'' ;?>"
                        required>
                    </div>

                    <div class="col md-6">
                        <label class="form-label" for="foto">Foto</label>
                        <input class="form-control" type="file" name="foto" id="foto" accept="image/*">
                    </div>
                    <div class="col md-6">
                        <label class="form-label" for="video">URL do Video</label>
                        <input class="form-control" type="url" name="video" id="video"
                        value="<?php ($formEdicao) ? print $receita->video : ''; ?>"
                        >
                    </div>

                    <div class="col-12">
                        <label for="ingredientes" class="form-label"> Ingredientes</label>
                        <textarea name="ingredientes" id="ingredientes" class="form-control"><?php ($formEdicao) ? print $receita->ingredientes : '' ; ?></textarea>
                    </div>
                    <div class="col-12">
                        <label for="modo_fazer" class="form-label">Modo de Preparo</label>
                        <textarea name="modo_fazer" id="modo_fazer" class="form-control"><?php ($formEdicao) ? print  $receita->modo_fazer : '' ; ?></textarea>
                    </div>
                    <div class="col-12">
                        <label for="descricao" class="form-label">Descrição</label>
                        <textarea name="descricao" id="descricao" class="form-control"><?php ($formEdicao) ? print $receita->descricao : '' ; ?></textarea>
                    </div>

                </div>

                <?php
                    if($formEdicao){
                ?>
                    <input class="btn btn-primary mt-3" 
                    type="submit" 
                    name="btnEditar" id="btnEditar" 
                    value="Editar Receita">
                <?php
                    } else {
                ?>
                <input class="btn btn-success mt-3" 
                type="submit" 
                name="btnCadastrar" id="btnCadastrar" 
                value="Cadastrar Receita">
                <?php 
                    }
                ?>


            </form>

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