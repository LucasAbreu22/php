<?php

require_once 'AcoesVideo.php';

class Video implements AcoesVideo{
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;

    public function __construct($titulo)
    {
        $this->titulo = $titulo;
        $this->avaliacao = 1;
        $this->views = 0;
        $this->curtidas = 0;
        $this->reproduzindo = false;
    }

    public function play(){
        $this->setReproduzindo(true);
    }

    public function pause()
    {
        $this->setReproduzindo(false);
    }

    public function like(){
        $this->curtidas++;
    }

    function getTitulo(){
        return $this->titulo;
    }

    function setTitulo($ti){
        $this->titulo = $ti;
    }

    function getAvaliacao(){
        return $this->avaliacao;
    }

    function setAvaliacao($av){
        $media = 0;
        $media = ($this->avaliacao + $av / $this->views);
        $this->avaliacao = $media;
    }

    function getViews(){
        return $this->views;
    }

    function setViews($vi){
        $this->views = $vi;
    }

    function getCurtidas(){
        return $this->curtidas;
    }

    function setCurtidas($crtd){
        $this->curtidas = $crtd;
    }

    function getReproduzindo(){
        return $this->reproduzindo;
    }

    function setReproduzindo($re){
        $this->reproduzindo = $re;
    }
}