<?php
include_once 'Conta.php';
/**
 * Description of ContaPoupanca
 *
 * @author Zilly
 */
class ContaPoupanca extends Conta{
    public $aniversario;
    
    
    public function __construct($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo, $cancelada, $aniversario) {
        parent::__construct($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo, $cancelada);
        $this->aniversario = $aniversario;
    }
    
    public function __toString() {
        return parent::__toString() . 'Aniversario: ' . $this->aniversario . '<br>';
    }

    //Retira saldo
    public function Retirar($valor) {
        if($this->saldo < 0 || $this->saldo < $valor){
            return false;
        } else {
            $this->saldo -= $valor;
            return true;
        }
    }
    
    
}
