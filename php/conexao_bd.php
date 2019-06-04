<?php
function abrirConexao(){
 $host = "localhost";
 $usuario = "root";
 $senha = "";
 $banco = "pweb2Php";

 $conn = new mysqli($host, $usuario, $senha,$banco) or die("conexão falhou: %s\n". $conn -> error);

 return $conn;
 }
 
function fecharConexao($conn){
    $conn -> close();
 }
   
?>