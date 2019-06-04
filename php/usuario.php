<?php
class Usuario{
    public $nome;
    public $cpf;
    public $endereco;
    //construtor da classe
    function Usuario($nome,$cpf,$endereco){
        $this->nome=$nome;
        $this->cpf=$cpf;
        $this->endereco=$endereco;
    }
    public function getCpf (){
        return $this->cpf;
        }
    
    public function getNome(){
        return $this->nome;
        }
    
    public function getEndereco(){
        return $this->endereco;
        }
    public function setNome($novoNome){
            $this->nome=novoNome;
        }
    public function setCpf($novoCpf){
        $this->cpf=novoCpf;
    }  
    public function setEndereco($novoEndereco){
        $this->endereco=novoEndereco;
    }
} ?>