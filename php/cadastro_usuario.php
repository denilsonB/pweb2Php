<?php 
    require_once "conexao_bd.php";
    include "usuario.php";

    $usuario = new Usuario($_POST['nome'],$_POST['cpf'],$_POST['endereco']);

    $nome = $usuario->getNome();
    $cpf = $usuario->getCpf();
    $endereco = $usuario->getEndereco();
    
    $sql = abrirConexao();

    $resultado = mysqli_query($sql,"INSERT INTO usuario(nome,cpf,endereco) VALUES ('$nome','$cpf','$endereco')") ;

    fecharConexao($sql);
    
    header("Location: /php/login.html"); 
    die(); 
?>