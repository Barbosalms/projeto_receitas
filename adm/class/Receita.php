<?php

class Receita 
{
    public $pdo;

    public function __construct()
    {
        $this->pdo = Conexao::conexao();
    } 

    /**
     * cadastra uma receita
     * @author Thomas Melo
     * 14-04-2023
     * @param array $form
     * @param array $arquivo
     * @return int || null
     */
    public function cadastrar(array $form, array $arquivo)
    {
        
        // abrir a conexão
        $sql = $this->pdo->prepare('INSERT INTO receitas
                    (id_categoria, titulo, foto, ingredientes, modo_fazer,descricao,dt,video)
                    VALUES
                    (:id_categoria, :titulo, :foto, :ingredientes, :modo_fazer,:descricao,:dt, :video)                
                ');
        // mesclar os dados
        $dt = date('Y-m-d');
        //subir a imagem
        $imagem = Helper::sobeArquivo($arquivo,'../img/');
        if($imagem){
            $foto = $imagem;
        }else{
           $foto = ''; 
        } 

        $sql->bindParam(':id_categoria',$form['id_categoria']);
        $sql->bindParam(':titulo',$form['titulo']);
        $sql->bindParam(':foto',$foto);
        $sql->bindParam(':ingredientes',$form['ingredientes']);
        $sql->bindParam(':modo_fazer',$form['modo_fazer']);
        $sql->bindParam(':descricao',$form['descricao']);
        $sql->bindParam(':dt',$dt);
        $sql->bindParam(':video',$form['video']);

        // executar a Query
        $sql->execute();
        // retornar a PK do registro criado
        return $this->pdo->lastInsertId();
        
    }

    /**
     * atualiza uma receita
     * 14-04-2023
     * @param integer $id_receita
     * @param array $arquivo
     * @param array $form
     * @return void
     */
    public function editar(int $id_receita, array $form, array $arquivo)
    {
        $query = $this->pdo->prepare('UPDATE receitas SET
                            id_categoria = :id_categoria,
                            titulo = :titulo,
                            foto = :foto,
                            ingredientes = :ingredientes,
                            modo_fazer = :modo_fazer,
                            descricao = :descricao,
                            video     = :video
                            WHERE
                            id_receita = :id_receita
                        ');
        //subir a imagem
        $imagem = Helper::sobeArquivo($arquivo,'../img/');
        if($imagem){
            $foto = $imagem;
        }else{
           $foto = $form['foto_atual']; 
        } 
        $query->bindParam(':id_categoria',$form['id_categoria']);
        $query->bindParam(':titulo',$form['titulo']);
        $query->bindParam(':foto',$foto);
        $query->bindParam(':ingredientes',$form['ingredientes']);
        $query->bindParam(':modo_fazer',$form['modo_fazer']);
        $query->bindParam(':descricao',$form['descricao']);
        $query->bindParam(':id_receita',$id_receita);
        $query->bindParam(':video',$form['video']);

        $query->execute();
    }

    public function excluir(int $id_receita)
    {
        $query = $this->pdo->prepare('UPDATE receitas SET
                                    excluido = 1
                                    WHERE
                                    id_receita = :id_receita
                                    ');
        $query->bindParam(':id_receita', $id_receita);
        $query->execute();
    }

    /**
     * retorna uma receita
     *
     * @param integer $id_receita
     * @return object
     */
    public function mostrar(int $id_receita)
    {
    

       $query = $this->pdo->prepare('SELECT * FROM receitas
                                    WHERE
                                    id_receita = :id_receita
                                    ');
        $query->bindParam(':id_receita',$id_receita);
        $query->execute();

        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function listar()
    {
        $query = $this->pdo->prepare('SELECT * FROM receitas
                                     ORDER BY id_receita DESC
                                    ');
        $query->execute();

        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function nomeCategoria(int $id_categoria)
    {
        $query = $this->pdo->prepare('SELECT categoria 
                                    FROM categorias
                                    WHERE 
                                    id_categoria = :id_categoria');
        $query->bindParam(':id_categoria',$id_categoria);
        $query->execute();
        $categoria = $query->fetch(PDO::FETCH_OBJ);
        return $categoria->categoria;
    }


}




?>