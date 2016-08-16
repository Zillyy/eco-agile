<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once 'ContaCorrente.php';
        include_once 'ContaPoupanca.php';
        
        $contaCorr = new ContaCorrente(123, 123, 123, 123, 123, 123, 123, 123);
        echo $contaCorr;
        echo '<br>';
        $contaPoup = new ContaPoupanca(123, 123, 123, 123, 123, 123, 123, 123);
        echo $contaPoup;

        /*
         * Ex.2: Baixar a classe abstrata Conta 
         * (https://github.com/Zillyy/eco-agile/tree/master/ex-conta).
         *  Criar as classes-filhas ContaCorrente e ContaPoupanca que herdam de Conta.
         *  A classe ContaCorrente deve ter o atributo limite e implementar o método 
         * Retirar (este método recebe um valor e o retira do saldo, por mais que saldo 
         * seja negativo antes e/ou depois da retirada). A classe ContaPoupanca deve ter o
         *  atributo aniversario e implementar o método Retirar (este método recebe um valor
         *  e retira do saldo, não sendo possível caso o valor seja maior que o saldo ou o
         *  saldo seja negativo antes da retirada). As classes-filhas também devem substituir
         *  o construtor de Conta e alocar os atributos que ainda não foram alocados.
         *  O método __toString também deve ser substituído para printar os atributos
         *  que ainda não foram printados pelo __toString de Conta. Vocês não precisam 
         * escrever aqueles comentários antes das funções como na classe Conta. Todos os
         *  atributos devem ser públicos. Testem diversas instâncias dos dois tipos de 
         * contas na index.
         */
        ?>
    </body>
</html>
