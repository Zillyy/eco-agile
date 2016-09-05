<?php
include_once 'Conta.php';

class ContaCorrente extends Conta {
    public $limite;
    
    /*
     * Construtor da classe ContaCorrente
     * @param $agencia Agência da conta
     * @param $codigo Código da conta
     * @param $dataDeCriacao Data de criação da conta
     * @param $titular Nome do titular da conta
     * @param $senha Senha da conta
     * @param $saldo Saldo da conta
     * @param $cancelada Estado da conta (cancelada ou ativa)
     * @param $limite Limite de saque da conta
     */
    public function __construct($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo, $cancelada, $limite) {
        parent::__construct($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo, $cancelada);
        $this->limite = $limite;
    }

    /*
     * Retorna uma string (obrigatoriamente) com informações da conta
     * @return string Informações gerais da conta
     */
    public function __toString() {
        return parent::__toString() . 'Limite: ' . $this->limite . '<br>';
    }

    /**
     * Retira o valor passado do saldo
     * @param $valor Valor passado
     */
    public function Retirar($valor){
       $this->saldo -= $valor; 
    }
}
