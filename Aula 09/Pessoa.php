<?php

class Pessoa{
    private $nome;
    private $idade;
    private $sexo;

    function __construct($no, $id, $se)
    {
        $this->setNome($no);
        $this->setIdade($id);
        $this->setSexo($se);
    }

    function getNome(){
        return $this->nome;
    }

    function setNome($no){
        $this->nome = $no;
    }

    function getIdade(){
        return $this->idade;
    }

    function setIdade($id){
        $this->idade = $id;
    }

    function getSexo(){
        return $this->sexo;
    }

    function setSexo($se){
        $this->sexo = $se;
    }

    function fazerAniversario(){
        $this->setIdade($this->getIdade() + 1);
    }
}
?>