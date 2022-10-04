<?php 

require_once 'Pessoa.php';

class Aluno extends Pessoa{
    private $matricula;
    private $curso;

    public function pagarMensalidade(){
        echo "<p>Pagando mensalidade do aluno $this->nome</p>";
    }

    public function getMatricula(){
        return $this->matricula;
    }

    public function setMatricula($ma){
        $this->matricula = $ma;
    }

    public function getCurso(){
        return $this->curso;
    }

    public function setCurso($crs){
        $this->curso = $crs;
    }
}