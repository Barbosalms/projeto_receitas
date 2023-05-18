<?php
include_once('inc/classes.php');
$cat = new Categoria();
    if(isset($_POST['btnExcluir'])){
        $cat->excluir($_POST['id_categoria']);
        header('location:categorias.php?ok'); 
    }
    if(isset($_GET['id']) && $_GET['id'] !='' ){
        $categoria = $cat->mostrar($_GET['id']);
      if(!$categoria){
        header('location:categorias.php');
      }
    }else{
        header('location:categorias.php');
    }

    // pegar o id da categoria que vai ser editada
    // if(isset($_GET['id']) && $_GET['id'] !='' ){
    //     $categoria = $cat->mostrar($_GET['id']);
    //   if(!$categoria){
    //     header('location:categorias.php');
    //   }
    // }else{
    //     header('location:categorias.php');
    // }
   
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área Administrativa - Excluir Categoria</title>
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
        <?php include_once('inc/menu-adm.php');?>
        <!-- /MENU -->
        <!-- PRINCIPAL -->
        <div class="row">
            <h1>Excluir Categoria</h1>
            <h2>Você tem certeza que deseja excluir a:</h2>
            <!-- FORMULARIO -->
            <form action="?" method="post" class="border">
                <input type="hidden" name="id_categoria" 
                value="<?php echo $categoria->id_categoria; ?>">

                <div class="row">
                    <div class="col-md-6 mt-3">
                        <label class="form-label" for="categoria">
                            Categoria
                            <?php echo $categoria->categoria; ?>
                        </label>
                    </div>
                    <div class="col-md-2">
                        <a class="btn btn-outline-primary mt-4" href="categorias.php">
                        <i class="bi bi-arrow-counterclockwise"></i></a>
                    </div>
                    <div class="col-md-2">
                        <input  class="btn btn-outline-danger mt-4" type="submit"  name="btnExcluir" id="btnExcluir" value="Excluir" >
                    </div>
                </div>
            </form>
             <!-- /FORMULARIO -->
            
           
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