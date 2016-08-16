<?php
include_once 'Conta.php';
/**
 * Description of ContaCorrente
 *
 * @author Zilly
 */
class ContaCorrente extends Conta {
    public $limite;
    
    //Construtor da classe ContaCorrente
    public function __construct($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo, $cancelada, $limite) {
        parent::__construct($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo, $cancelada);
        $this->limite = $limite;
    }

    public function __toString() {
        return parent::__toString() . 'Limite: ' . $this->limite . '<br>';
    }

    
    /*Retirar (este método recebe um valor e o retira do saldo, por mais que saldo 
     * seja negativo antes e/ou depois da retirada).
     */
    public function Retirar($valor){
       $this->saldo -= $valor; 
    }
    
    
}
