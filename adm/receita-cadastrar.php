<?php
include_once('inc/classes.php');

if(isset($_POST['btnCadastrar'])){
    $receita = new Receita();
    $receita->cadastrar($_POST);
    header('location:receitas.php');
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
            <h1>Cadastrar Receita</h1>

            <form action="?" method="post" enctype="multipart/form-data" >
               <div class="row">
                <div class="col-md-3">
                    <label class="form-label" for="id_categoria">Categoria*</label>
                    <select class="form-select"
                      name="id_categoria" id="id_categoria" required>
                      <option value="">Selecione</option>
                        <?php
                            $objCategoria = new Categoria();
                            $categorias = $objCategoria->listar();
                            foreach ($categorias as $categoria) {
                                echo '<option value="'.$categoria->id_categoria.'">';
                                echo $categoria->categoria;
                                echo '</option>';                               
                            }
                        ?>
                    </select>
                </div>
                <div class="col-md-9">
                    <label class="form-label" for="titulo">Título*</label>
                    <input class="form-control" 
                     type="text" name="titulo" id="titulo"                     
                     placeholder="Ex.: Bolo de abacaxi com creme de leite"
                    required>
                </div>
                
                <div class="col md-6">
                    <label class="form-label" for="foto">Foto</label>
                    <input class="form-control" type="file" 
                     name="foto" id="foto">
                </div>
                <div class="col md-6">
                    <label class="form-label" for="video">URL do Video</label>
                    <input class="form-control" type="text" 
                    name="video" id="video" 
                    >
                </div>

                <div class="col-12">
                    <label for="ingredientes" class="form-label"> Ingredientes</label>
                    <textarea name="ingredientes" id="ingredientes" class="form-control"></textarea>
                </div>
                <div class="col-12">
                    <label for="modo_fazer" class="form-label">Modo de Preparo</label>
                    <textarea name="modo_fazer" id="modo_fazer" class="form-control"></textarea>
                </div>
                <div class="col-12">
                    <label for="descricao" class="form-label">Descrição</label>
                    <textarea name="descricao" id="descricao" class="form-control"></textarea>
                </div>

              
               <input class="btn btn-outline-dark mt-3" type="submit" 
                name="btnCadastrar" id="btnCadastrar"
                value="Cadastrar Receita"> 

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