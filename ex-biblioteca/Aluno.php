<?php

class Aluno {

    private $nome;
    private $matricula;
    private $telefone;
    private $livro;

    function __construct($nome, $matricula, $telefone, $livro = null) {
        $this->nome = $nome;
        $this->matricula = $matricula;
        $this->telefone = $telefone;
        $this->livro = $livro;
    }

    function getNome() {
        return $this->nome;
    }

    function getMatricula() {
        return $this->matricula;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getLivro() {
        return $this->livro;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function PegaLivro($livro) {
        $this->livro = $livro;
    }

    function DevolveLivro() {
        $livro = $this->livro;
        $this->livro = null;
        return $livro;
    }

}
