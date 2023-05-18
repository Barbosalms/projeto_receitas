<?php
include_once('inc/classes.php');

$objUsuario = new Usuario();
echo '<pre>';
// verificando e-mails
if( $objUsuario->checarEmail('teste@teste.teste') ){
    echo 'E-mail já existe<br>';
}else{
    echo 'O e-mail pode ser utilizado<br>';
}

 // criando o array de dados
 $dados['nome']  = 'maria da Silva';
 $dados['email'] = 'maria8@teste.teste';
 $dados['senha'] = 'maria8';

 // efetuando o cadastro
 if($objUsuario->cadastrar($dados)){
    echo '<br>Cadastro efetuado com sucesso!<br>';
 }else{
    echo '<br> Deu ruim.<br>';
 }
 //mostrando o cadastro realizado
 print_r($objUsuario->mostrar(8));

 // atualizar com dados válidos
 $dados['nome'] = 'maria 8';
 if($objUsuario->editar($dados,8)){
        echo '<br>Atualizado com sucesso!<br>';
 }else{
    echo '<br>Não atualizado.<br>';
 }

 print_r($objUsuario->mostrar(8));

 // atualizar com um e-mail existente
 $dados['email'] =  'teste@teste.teste';

 if($objUsuario->editar($dados,8)){
    echo '<br>Atualizado com sucesso!<br>';
 }else{
    echo '<br>Não atualizado.<br>';
 }

print_r($objUsuario->mostrar(8));

// atualizar senha
// com a senha atual correta
$senhas['senha_atual'] = 'maria8';
$senhas['senha']  = 'maria833';

if($objUsuario->editarSenha($senhas, 8)){
    echo '<br> Senha atualizada.<br>';
}else{
    echo '<br> Senha Não atualizada.<br>';
}
print_r($objUsuario->mostrar(8));

// tentativa de atualizar com senha
// inválidas
$senhas['senha_atual'] = 'teste';
$senhas['senha']  = 'teste123';

if($objUsuario->editarSenha($senhas, 8)){
    echo '<br> Senha atualizada.<br>';
}else{
    echo '<br> Senha Não atualizada.<br>';
}
print_r($objUsuario->mostrar(8));
