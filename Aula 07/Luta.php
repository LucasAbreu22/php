<?php

    class Luta{
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

        function getDesafiado(){
            return $this->desafiado;
        }

        function setDesafiado($de){
            $this->desafiado = $de;
        }

        function getDesafiante(){
            return $this->desafiante;
        }

        function setDesafiante($de){
            $this->desafiante = $de;
        }

        function getRounds(){
            return $this->rounds;
        }

        function setRounds($ro){
            $this->rounds = $ro;
        }

        function getAprovada(){
            return $this->aprovada;
        }

        function setAprovada($ap){
            $this->aprovada = $ap;
        }

        function marcarLuta($l1, $l2){
            if($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)){
                $this->setAprovada(true);
                $this->setDesafiado($l1);
                $this->setDesafiante($l2);
            }else{
                $this->setAprovada(false);
                $this->setDesafiante(null);
                $this->setDesafiado(null);
            }
        }

        function lutar(){
            if($this->getAprovada()){
                $this->getDesafiado()->apresentar();
                $this->getDesafiante()->apresentar();
                $vencedor = rand(0,2);

                switch($vencedor){
                    case 0:
                        echo "<p>Empate</p>";
                        $this->getDesafiado()->empatarLuta();
                        $this->getDesafiante()->empatarLuta();
                        break;
                    case 1:
                        echo '<p>'. $this->getDesafiado()->getNome() . " venceu a luta";
                        $this->getDesafiado()->ganharLuta();
                        $this->getDesafiante()->perderLuta();
                        break;
                    case 2:
                        echo '<p>'. $this->getDesafiante()->getNome() . " venceu a luta";
                        $this->getDesafiante()->ganharLuta();
                        $this->getDesafiado()->perderLuta();
                        break;
                }

            }else{
                echo "<p> A luta não pode acontecer!</p>";
            }
        }
    }
?>