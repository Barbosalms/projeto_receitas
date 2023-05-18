<?php

class Usuario
{

    public $pdo;
    protected $salt;

    public function __construct()
    {
        $this->pdo = Conexao::conexao();
        $this->salt = "Canes";
    }

    /**
     * criptografa o valor fornecido
     *
     * @param string $valor
     * @return string
     */
    public function criptografar(string $valor): string
    {
        return crypt($valor, $this->salt);
    }


    public function listar()
    {
        $sql = $this->pdo->prepare('SELECT * FROM 
                                        usuarios 
                                        ORDER BY nome');
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_OBJ);
    }

    public function mostrar(int $id)
    {
        $sql = $this->pdo->prepare('SELECT * FROM 
                                        usuarios
                                        WHERE 
                                        id_usuario = :id_usuario');
        $sql->bindParam(':id_usuario', $id);
        $sql->execute();
        return $sql->fetch(PDO::FETCH_OBJ);
    }

    public function excluir(int $id): void
    {
        $sql = $this->pdo->prepare('DELETE FROM usuarios
                                        WHERE 
                                        id_usuario = :id_usuario');
        $sql->bindParam(':id_usuario', $id);
        $sql->execute();
    }

    public function checarEmail(string $email): bool
    {
        $sql = $this->pdo->prepare('SELECT email FROM
                                      usuarios
                                      WHERE
                                      email = :email
                                      LIMIT 1');
        $sql->bindParam(':email', $email);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            return true;
        }
        return false;
    }

    public function cadastrar(array $dados)
    {
        if ($this->checarEmail($dados['email'])) {
            return false;
        } else {
            $sql = $this->pdo->prepare('INSERT INTO usuarios
                                            (nome, email, senha)
                                            VALUES
                                            (:nome, :email, :senha)
                                          ');

            $senha = $this->criptografar($dados['senha']);
            $email = trim(strtolower($dados['email']));
            $nome  = trim(strtoupper($dados['nome']));

            $sql->bindParam(':nome', $nome);
            $sql->bindParam(':email', $email);
            $sql->bindParam(':senha', $senha);
            $sql->execute();
        }

        return true;
    }

    public function editar(array $dados, int $id_usuario): bool
    {
        // verificar se o e-mail enviado é o mesmo que
        // o usuário já possui
        $usuario = $this->mostrar($id_usuario);
        $email = trim(strtolower($dados['email']));
        $nome  = trim(strtoupper($dados['nome']));

        if ($usuario->email != $email) {
            if ($this->checarEmail($email)) {
                return false;
            }
        }
        // realizar o update
        $sql = $this->pdo->prepare('UPDATE usuarios SET
                                        nome = :nome,
                                        email = :email
                                        WHERE
                                        id_usuario = :id_usuario
                                      ');
        $sql->bindParam(':email', $email);
        $sql->bindParam(':nome', $nome);
        $sql->bindParam(':id_usuario', $id_usuario);
        $sql->execute();
        return true;
    }

    public function editarSenha(array $dados, int $id): bool
    {
        // verificar se a senha atual é igual a senha
        // cadastrada no banco de dados
        $usuario = $this->mostrar($id);
        $senha_atual = $this->criptografar($dados['senha_atual']);
        $nova_senha  = $this->criptografar($dados['senha']);        
    
        if ($senha_atual != $usuario->senha) {
            return false;
        }

        $sql = $this->pdo->prepare('UPDATE usuarios SET
                                    senha = :senha
                                    WHERE
                                    id_usuario = :id_usuario
                                    ');
        $sql->bindParam(':senha', $nova_senha);
        $sql->bindParam(':id_usuario', $id);
        $sql->execute();        
        return true;
    }

    public function logar(string $email, string $senha): bool
    {
        $query = $this->pdo->prepare('SELECT nome FROM usuarios
                                        WHERE
                                        email = :email
                                        AND
                                        senha = :senha
                                    ');
        $email = strtolower($email);
        $senha = $this->criptografar($senha);

        $query->bindParam(':email',$email);
        $query->bindParam(':senha', $senha);
        $query->execute();
        $usuario = $query->fetch(PDO::FETCH_OBJ);
        
        if($usuario && $usuario->nome !=''){            
            $_SESSION['logado'] = true;
            $_SESSION['nome'] = $usuario->nome;
            return true;
        }else{
            session_destroy();
            return false;
        }
        
    }
}
