<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa{
    private $matri;
    private $curso;

    public function cancelarMatri(){
        echo "<p>Matrícula Cancelada</p>";
    }

    public function getMatr(){
        return $this->matri;
    }

    public function setMatr($ma){
        $this->matri = $ma;
    }

    public function getCurso(){
        return $this->curso;
    }

    public function setCurso($crs){
        $this->curso = $crs;
    }
}