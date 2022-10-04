<?php

abstract class Pessoa{
    protected $nome;
    protected $idade;
    protected $sexo;
    protected $experiencia;

    public function __construct($nome, $idade, $sexo)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->experiencia = 0;
    }

    protected function ganharExp(){
        $this->experiencia++;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($no){
        $this->nome = $no;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function setIdade($id){
        $this->idade = $id;
    }

    public function getSexo(){
        return $this->sexo;
    }

    public function setSexo($se){
        $this->sexo = $se;
    }

    public function getExperiencia(){
        return $this->experiencia;
    }

    public function setExperiencia($ex){
        $this->experiencia = $ex;
    }
}