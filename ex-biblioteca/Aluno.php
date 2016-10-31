<?php

class Aluno {

    private $id;
    private $nome;
    private $matricula;
    private $telefone;
    private $livro;

    function __construct($id = null, $nome = null, $matricula = null, $telefone = null, $livro = null) {
        $this->id = $id;
        $this->nome = $nome;
        $this->matricula = $matricula;
        $this->telefone = $telefone;
        $this->livro = $livro;
    }

    function getId() {
        return $this->id;
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

    function setId($id) {
        $this->id = $id;
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
