<?php

class Livro {

    private $id;
    private $titulo;
    private $autor;
    private $numPaginas;
    private $situacao;

    function __construct($id, $titulo, $autor, $numPaginas, $situacao) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->numPaginas = $numPaginas;
        $this->situacao = $situacao;
    }

    function getId() {
        return $this->id;
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
    
    function setId($id) {
        $this->id = $id;
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
        $this->situacao = $situacao;
    }

}
