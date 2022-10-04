<?php

require_once 'Animal.php';

class Peixe extends Animal{
    private $corEscama;

    public function locomover(){
        echo '<p>Nadar</p>';
    }

    public function alimentar(){
        echo '<p>Comendo planctons</p>';
    }

    public function emitirSom(){
        echo '<p>Peixe não faz som</p>';
    }

    public function soltarBolhas(){
        echo '<p>Soltou uma bolha</p>';
    }

    public function getCorEscama(){
        return $this->corEscama;
    }

    public function setCorEscama($ce){
        $this->corEscama = $ce;
    }
}