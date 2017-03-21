<?php
include_once 'Conta.php';

class ContaPoupanca extends Conta{
    public $aniversario;
    
    /**
     * Construtor de Conta
     * @param $agencia Agência da conta
     * @param $codigo Código da conta
     * @param $dataDeCriacao Data de criação da conta
     * @param $titular Nome do titular da conta
     * @param $senha Senha da conta
     * @param $saldo Saldo da conta
     * @param $cancelada Estado da conta (cancelada ou ativa)
     * @param $aniversario Data de aniversário do cliente da conta
     */
    public function __construct($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo, $cancelada, $aniversario) {
        parent::__construct($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo, $cancelada);
        $this->aniversario = $aniversario;
    }
    
    /**
     * Retorna uma string (obrigatoriamente) com informações da conta
     * @return string Informações gerais da conta
     */
    public function __toString() {
        return parent::__toString() . 'Aniversario: ' . $this->aniversario . '<br>';
    }

    /**
     * Retira o valor passado do saldo
     * @param $valor Valor passado
     */
    public function Retirar($valor) {
        if($this->saldo < 0 || $this->saldo < $valor){
            return false;
        } else {
            $this->saldo -= $valor;
            return true;
        }
        echo "teste commit";
    }
}
