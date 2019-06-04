<?php 
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];
    
    include "conexao_bd.php";

    $con = abrirConexao();

    $resultado = mysqli_query($con,"select * from usuario where nome='$nome'");
    $linhas = mysqli_num_rows($resultado);

    if ($linhas==0)
        echo "Usuário não encotrado.";
    else {
        $dados = mysqli_fetch_array($resultado);

        if ($senha != $dados["cpf"]){
            echo "Senha incorreta.";
        }else {
            session_start();

            $_SESSION['nome']  = $nome;
            $_SESSION['senha'] = $senha;
            header("Location: pagina_autenticada.php");
            }
        mysqli_close($con);
    }
?>