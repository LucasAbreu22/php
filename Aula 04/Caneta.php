<?php
class Caneta {
    private $modelo;
    private $cor;
    private $ponta;
    private $tampada;

   // public function __construct(){
    /*    $this->cor = "Azul";
        $this->tampada = true;
    }*/

    public function Caneta($m, $c, $p){
        $this->cor = $c;
        $this->modelo = $m;
        $this->ponta = $p;
    }
    
    public function getModelo(){
        return $this->modelo;
    }

    public function setModelo($m){
        $this->modelo = $m;
    }

    public function getPonta(){
        return $this->ponta;
    }

    public function setPonta($p){
        $this->ponta = $p;
    }
    
}
?>