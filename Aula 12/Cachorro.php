<?php

require_once "Mamifero.php";

class Cachorro extends Mamifero{
    public function enterrarOsso(){
        echo "<p>enterrando osso</p>";
    }

    public function abanarRabo(){
        echo "<p>Abanando rabo</p>";
    }

    public function reagirFrase($frase){
        if($frase == "toma comida" || $frase == "Olá"){
            echo "<p>Abanar e latir</p>";
        }else{
            echo "<p>Rosnar</p>";
        }
    }

    public function reagirHora($hora, $min){
        if($hora < 12){
            echo "<p>Abanar</p>";
        }else if($hora >= 18){
            echo "<p>Ignorar</p>";
        }else{
            echo "<p>Abanar e latir</p>";
        }
    }

    public function reagirDono($dono){
        if($dono){
            echo "<p>Abanar</p>";
        }else{
            echo "<p>Rosnar e latir</p>";
        }
    }

    public function reagirIdade($idade, $peso){
        if($idade < 4){
            if($peso < 10){
                echo "<p>Abanar</p>";
            }else{
                echo "<p>Latir</p>";
            }
        }else{
            if($peso < 10){
                echo "<p>Rosnar</p>";
            }else{
                echo "<p>Ignorar</p>";
            }
        }
    }
}