<?php
include_once './Conexao.php';
include_once './Aluno.php';

class AlunoDao {
    public function selecionarTodos(){
        $sql = 'SELECT * FROM aluno';
        
        $con = new Conexao();
        $con->Conecta();
        $listaAlunos = $con->Consulta($sql);   
    
        $con->Desconecta();
        
        $arrayAlunos = []; //array de objetos do tipo aluno
        
        foreach($listaAlunos as $aluno){
            array_push($arrayAlunos, new Aluno($aluno['id'], $aluno['nome'], $aluno['matricula'], $aluno['telefone'], $aluno['livro_id']));
        }
        
        return $arrayAlunos;   
    }
    
    public function selecionarPorMatricula($matricula){
        $sql = 'SELECT * FROM aluno WHERE matricula = "' . $matricula . '"';
        
        $con = new Conexao();
        $con->Conecta();
        
        $listaAlunos = $con->Consulta($sql);
        
        $con->Desconecta();
        
        foreach($listaAlunos as $aluno){
            return new Aluno($aluno['id'], $aluno['nome'], $aluno['matricula'], $aluno['telefone'], $aluno['livro_id']);
        }
    }
}
