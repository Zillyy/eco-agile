<?php

class Livro {

    private $titulo;
    private $autor;
    private $numPaginas;
    private $situacao;

    function __construct($titulo, $autor, $numPaginas, $situacao) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->numPaginas = $numPaginas;
        $this->situacao = $situacao;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getAutor() {
        return $this->autor;
    }

    function getNumPaginas() {
        return $this->numPaginas;
    }

    function getSituacao() {
        return $this->situacao;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setAutor($autor) {
        $this->autor = $autor;
    }

    function setNumPaginas($numPaginas) {
        $this->numPaginas = $numPaginas;
    }

    function setSituacao($situacao) {
        echo 'oi';
    }

}
