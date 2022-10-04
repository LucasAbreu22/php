<?php

class Conta{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;


    function __construct()
    {
        $this->setStatus(false);
        $this->setSaldo(0);
        echo '<p>Conta criada com sucesso!</p>';
    }

    function setNumConta($n){
        $this->numConta = $n;
    }
    
    function getNumConta(){
        return $this->numConta;
    }

    function setTipo($t){
        $this->tipo = $t;
    }

    function getTipo(){
        return $this->tipo;
    }

    function setDono($d){
        $this->dono = $d;
    }

    function getDono(){
        return $this->dono;
    }

    function setSaldo($s){
        $this->saldo = $s;
    }

    function getSaldo(){
        return $this->saldo;
    }

    function setStatus($s){
        $this->status = $s;
    }

    function getStatus(){
        return $this->status;
    }

    function abrirConta($t){
        
        $this->setTipo($t);
        $this->setStatus(true);

        if($t === "CC"){
            $this->saldo = 50;
        }
        else if($t === "CP"){
            $this->saldo = 150;
        }
    }

    function fecharConta(){
        if($this->saldo > 0){
            echo "<p>Conta com dinheiro, não posso fechá-la</p>";
        } else if($this->saldo < 0){
            echo "<p>Conta em débito. Impossível encerrar</p>";
        } else{
            echo '<p>Conta de '.$this->getDono().' fechada com sucesso</p>';
        }
    }

    function depositar($v){
        if($this->getStatus()){
            $this->setSaldo($this->getSaldo() + $v) ;
        }else{
            echo "<p>Conta fechada. Impossível depositar</p>";
        }
    }

    function sacar($v){
        if($this->getStatus()){
            if($this->getSaldo() >= $v){
                $this->setSaldo($this->getSaldo() - $v);
                echo '<p>Saque de R$'. $v .' na conta de '. $this->getDono() .'</p>';
            }
        }else{
            echo " <p>Impossível sacar. Saldo insuficiente!</p>";
        }
    }

    function pagarMensal(){
        $v = '';

        if($this->getTipo() === "CC"){
            $v = 12;
        }

        else if($this->getTipo() ==="CP"){
            $v = 20;
        }

        if($this->getStatus()){
            if($this->getSaldo() > $v){
                $this->setSaldo($this->getSaldo() - $v);
                echo '<p>Mensalidade de R$'. $v .' foi debitada na conta de '. $this->getDono() .'</p>';
            }else{
                echo " <p>Problemas com a conta. Não posso sacar.</p>";
            }
        }else{
            echo " <p>Impossível pagar</p>";
        }
    }
}
?>