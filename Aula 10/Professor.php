<?php
require_once 'Pessoa.php';

class Professor extends Pessoa{
    private $especialidade;
    private $salario;

    public function receberAum(){}

    public function getEspecialidade(){
        return $this->especialidade;
    }

    public function setEspecialidade($es){
        $this->especialidade = $es;
    }

    public function getSalario(){
        return $this->salario;
    }

    public function setSalario($sa){
        $this->salario = $sa;
    }
}