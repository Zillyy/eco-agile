<?php

class Biblioteca {
    
    private $arrayDeLivros;
    
    function __construct($arrayDeLivros) {
        $this->arrayDeLivros = $arrayDeLivros;
    }

    function LivrosDisponiveis(){
        $livrosDisponiveis = 'Livros disponíveis:<br>';
        foreach($this->arrayDeLivros as $livro){
            $livrosDisponiveis .= '- ' . $livro->getTitulo() . '<br>';
        }
        return $livrosDisponiveis;
    }
    
    function AdicionaLivro($livro){
        array_push($this->arrayDeLivros, $livro);
    }
    
    function RetiraLivro($titulo){
        foreach($this->arrayDeLivros as $indice => $livro){
            if($livro->getTitulo() === $titulo){
                $retirado = $livro;
                unset($this->arrayDeLivros[$indice]);
                return $retirado;
            }
        }
        return false;
    }
}
