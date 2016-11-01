<?php
include_once './Conexao.php';
include_once './Aluno.php';

class AlunoDao {
    public function selecionarTodos(){
        $sql = 'SELECT * FROM aluno NATURAL JOIN livro';
        
        $con = new Conexao();
        $con->Conecta();
        $listaAlunos = $con->Consulta($sql);   
    
        $con->Desconecta();
        
        $arrayAlunos = []; //array de objetos do tipo aluno
        
        foreach($listaAlunos as $aluno){
            $livro = new Livro($aluno['livro_id'], $aluno['titulo'], $aluno['autor'], $aluno['num_paginas'], $aluno['situacao']);
            array_push($arrayAlunos, new Aluno($aluno['id'], $aluno['nome'], $aluno['matricula'], $aluno['telefone'], $livro));
        }
        
        return $arrayAlunos;   
    }
    
    public function selecionarPorMatricula($matricula){
        $sql = 'SELECT * FROM aluno NATURAL JOIN livro WHERE matricula = "' . $matricula . '"';
        
        $con = new Conexao();
        $con->Conecta();
        
        $listaAlunos = $con->Consulta($sql);
        
        $con->Desconecta();
        
        foreach($listaAlunos as $aluno){
            $livro = new Livro($aluno['livro_id'], $aluno['titulo'], $aluno['autor'], $aluno['num_paginas'], $aluno['situacao']);
            return new Aluno($aluno['id'], $aluno['nome'], $aluno['matricula'], $aluno['telefone'], $livro);
        }
    }
}
