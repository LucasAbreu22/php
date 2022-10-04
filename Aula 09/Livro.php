<?php 

require_once 'Publicacao.php';

class Livro{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    function __construct($ti, $au, $tp, $le)
    {
        $this->setPagAtual(0);
        $this->setAberto(false);
        $this->setTitulo($ti);
        $this->setAutor($au);
        $this->setTotPaginas($tp);
        $this->setLeitor($le);
    }

    function getTitulo(){
        return $this->titulo;
    }

    function setTitulo($ti){
        $this->titulo = $ti;
    }

    function getAutor(){
        return $this->autor;
    }

    function setAutor($au){
        $this->autor = $au;
    }

    function getTotPaginas(){
        return $this->totPaginas;
    }

    function setTotPaginas($tp){
        $this->totPaginas = $tp;
    }

    function getPagAtual(){
        return $this->pagAtual;
    }

    function setPagAtual($pa){
        $this->pagAtual = $pa;
    }

    function getAberto(){
        return $this->aberto;
    }

    function setAberto($ab){
        $this->aberto = $ab;
    }

    function getLeitor(){
        return $this->leitor;
    }

    function setLeitor($le){
        $this->leitor = $le;
    }

    function detalhes(){
        echo '------------- DETALHES -----------------';
        echo '<p>Título: ' .$this->getTitulo(). '</p>';
        echo '<p>Autor: '.$this->getAutor(). '</p>';
        echo '<p>Total de Páginas: '.$this->getTotPaginas().'</p>';
        echo '<p>Página atual: ' . $this->getPagAtual() . '</p>';
        echo '<p>Está aberto? ' . ($this->getAberto() ? 'SIM' : 'NÃO') . '</p>';
        echo '<p>Quem está lendo? ' .  $this->getLeitor()->getNome() . '</p>';
        echo '-----------------------------------------';
    }

    function abrir(){
        if(!$this->getAberto()){
            $this->setAberto(true);
            echo '<p>Livro Aberto!</p>';
        }
        
    }

    function fechar(){
        if($this->getAberto()){
            $this->setAberto(false);
            echo '<p>Livro Fechado!</p>';
        }
        
    }

    function folhear(){
        if($this->getAberto()){
            echo '<p>Livro folheado</p>';
        }else{
            echo '<p>Abra o livro para folhear!</p>';
        }
        
    }

    function avancarPag(){
        if($this->getAberto()){
            $this->setPagAtual($this->getPagAtual() + 1);
            echo '<p>Livro está na página ' . $this->getPagAtual(). '</p>';
        }else{
            echo '<p>Abra o livro para avançar páginas!</p>';
        }
    }

    function voltarPag(){
        if($this->getAberto()){
            $this->setPagAtual($this->getPagAtual() - 1);
            echo '<p>Livro está na página ' . $this->getPagAtual(). '</p>';
        }else{
            echo '<p>Abra o livro para voltar páginas!</p>';
        }
    }

}
?>