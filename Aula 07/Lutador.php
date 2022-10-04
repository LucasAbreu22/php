<?php

class Lutador{
    private $nome;
    private $nacionalidade;
    private $idade, $altura, $peso;
    private $categoria, $vitorias, $derrotas, $empates;

    function __construct($no, $na, $id, $al, $pe, $vi, $de, $em)
    {
        $this->setNome($no);
        $this->setNacionalidade($na);
        $this->setIdade($id);
        $this->setAltura($al);
        $this->setPeso($pe);
        $this->setVitorias($vi);
        $this->setDerrotas($de);
        $this->setEmpates($em);
    }

    function setNome($n){
        $this->nome = $n;
    }
    
    function getNome(){
        return $this->nome;
    }

    function setNacionalidade($n){
        $this->nacionalidade = $n;
    }

    function getNacionalidade(){
        return $this->nacionalidade;
    }

    function setIdade($i){
        $this->idade = $i;
    }

    function getIdade(){
        return $this->idade;
    }

    function setAltura($a){
        $this->altura = $a;
    }

    function getAltura(){
        return $this->altura;
    }

    function setPeso($p){
        $this->peso = $p;
        $this->setCategoria();
    }

    function getPeso(){
        return $this->peso;
    }

    function setCategoria(){
        if($this->getPeso() < 52.2){
            $this->categoria = "Inválido";
        }else if($this->getPeso() <= 70.3){
            $this->categoria = "Leve";
        }else if($this->getPeso() <= 83.9){
            $this->categoria = "Médio";
        }else if($this->getCategoria() <= 120.2){
            $this->categoria = "Pesado";
        }
    }

    function getCategoria(){
        return $this->categoria;
    }

    function setVitorias($v){
        $this->vitorias = $v;
    }

    function getVitorias(){
        return $this->vitorias;
    }

    function setDerrotas($d){
        $this->derrotas = $d;
    }

    function getDerrotas(){
        return $this->derrotas;
    }

    function setEmpates($e){
        $this->empates = $e;
    }

    function getEmpates(){
        return $this->empates;
    }

    function apresentar(){
        echo '<p>------------------------</p>';
        echo '<p>CHEGOU A HORA! O lutador ' . $this->getNome();
        echo 'veio diretamente de '. $this->getNacionalidade();
        echo ' tem ' . $this->getIdade() . ' anos e pesa ' . $this->getPeso() . 'Kg';
        echo '<br> Ele tem ' . $this->getVitorias() . ' vitórias ';
        echo $this->getDerrotas() . ' derrotas e ' . $this->getEmpates() . ' empates';
    }

    function status(){
        echo '<p>--------------------------------</p>';
        echo '<p>'.$this->getNome().' é um peso '. $this->getCategoria();
        echo ' e já ganhou ' . $this->getVitorias() . ' vezes,';
        echo ' perdeu '. $this->getDerrotas() . ' vezes e ';
        echo ' empatou ' . $this->getEmpates() . ' vezes';
    }

    function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }

    function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }

    function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }
}

?>