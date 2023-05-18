<?php 
class Banner extends Conexao
{
    
    # ATRIBUTOS	
	public $pdo;
    
    public function __construct()
    {
        $this->pdo = Conexao::conexao();               
    }

    /**
     * listar
     * @return array
     */
    public function listar(){
    	//montar o SELECT ou o SQL
    	$sql = $this->pdo->prepare('SELECT * FROM banners ORDER BY id_banner');
    	//executar a consulta
    	$sql->execute();
    	//pegar os dados retornados
    	$dados = $sql->fetchAll(PDO::FETCH_OBJ);
    	return $dados;
    }

    /**
     * cadastrar  
     *
     * @param Array $dados
     * @return int 
     */
    public function cadastrar(array $banner, string $url)
    {
        $sql = $this->pdo->prepare('INSERT INTO banners 
                                    (banner, url)
                                    VALUES
                                    (:banner, :url)
                                    ');

        $banner = Helper::sobeArquivo($banner,'../img/banner/');
        //ternário
        //$url ?? strtolower($url);
        $url =  $url ? strtolower($url) : '';

        if (!$banner) {
            return false;
        }
        //mesclar os dados
        $sql->bindParam(':banner',$banner);
        $sql->bindParam(':url',$url);
        //executar
        $sql->execute();
        return $this->pdo->lastInsertId();
    }

    
    /**
     * Excluir 
     *
     * @param integer $id_banner
     * @return void
     */
    public function excluir(int $id_banner)
    {
        // atualizar todas as noticias dessa banner
        // para a categoria padrão
        $pdo = $this->pdo->prepare('DELETE FROM banners 
                                    WHERE
                                    id_banner = :id_banner
                                    
                                ');
        $pdo->bindParam(':id_banner',$id_banner);
        $pdo->execute();       
    }

    /**
     * mostra 
     *
     * @param integer $id_banner
     * @return string
     */
    public function mostrar():array
    {
        $sql = $this->pdo->prepare('SELECT * FROM banners 
                                    ORDER BY rand() LIMIT 1
                                    ');
        $sql->execute();
        return $sql->fetch(PDO::FETCH_OBJ);
    }

    


}

?>