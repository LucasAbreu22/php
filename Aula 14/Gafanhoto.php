<?php

require_once "Pessoa.php";

class Gafanhoto extends Pessoa{

    private $login;
    private $totAssistido;

    public function __construct($nome, $idade, $sexo, $login)
    {
        parent::__construct($nome, $idade, $sexo);

        $this->login = $login;
        $this->totAssistido = 0;
    }

    public function viuMaisUm(){
        $this->setTotAssistido($this->getTotAssistido() + 1);
    }

    public function getLogin(){
        return $this->login;
    }

    public function setLogin($lo){
        $this->login = $lo;    
    }

    public function getTotAssistido(){
        return $this->totAssistido;
    }

    public function setTotAssistido($ta){
        $this->totAssistido = $ta;
    }
}