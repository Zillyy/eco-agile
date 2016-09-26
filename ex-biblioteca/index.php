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
        /* 
         * Ex. 3:
         * Construa um sistema de controle para uma biblioteca:
         *  - Alunos são identificados por nome, matricula, telefone e livro;
         *  - Livros contém título, autor, número de páginas e situação;
         *  - Um aluno pode fazer empréstimo de somente um livro;
         *  - Biblioteca deve armazenar um array de livros;
         *  - Criar métodos nas classes para o aluno poder retirar livros da biblioteca;
         *  - Atributos são todos private. Criar Getters, Setters e Construtores.
         */
        
        include_once 'Aluno.php';
        include_once 'Livro.php';
        include_once 'Biblioteca.php';
        
        include_once 'dao/AlunoDao.php';
        
        $alunoDao = new AlunoDao();
        $arrayAlunos = $alunoDao->selecionarTodos();
        
        foreach($arrayAlunos as $aluno){
            echo 'Nome: ' . $aluno->getNome() . '</br>';
        }
        
        echo '</br>';
        echo '</br>';
        
        $matricula = '1234567890';
        
        $joaozinho = $alunoDao->selecionarPorMatricula($matricula);
        if($joaozinho){
            echo 'Nome: ' . $joaozinho->getNome();
        } else {
            echo 'Consulta por matrícula ' . $matricula . ' falhou!';
        }
        
        
        //Instância de Livros
//        $pequenoPrincipe = new Livro('Pequeno Principe', 'Antoine de Saint-Exupéry', 255, 'Disponível');
//        $brancaDeNeve = new Livro('Branca de Neve', 'Irmãos Grimm', 127, 'Disponível');
//        $joaoMaria = new Livro('João e Maria', 'Irmãos Grimm', 378, 'Disponível');
//        $gatoDeBotas = new Livro('Gato de Botas', 'Charles Perrault', 572, 'Disponível');
//        
//        //Array de Livros
//        $array = [
//            "pequenoprincipe" => $pequenoPrincipe,
//            "brancadeneve" => $brancaDeNeve,
//            "joaoemaria" => $joaoMaria,
//            "gatoDeBotas" => $gatoDeBotas
//        ];
//                
//        //Instância da Biblioteca e do Aluno
//        $biblioteca = new Biblioteca($array);
//        $aluno = new Aluno('Zilly', 1029384756, '(00)1234-5678');
//        
//        //Novo livro criado para ser adicionado à biblioteca
//        $patinhoFeio = new Livro('O Patinho Feio', 'Hans Christian Andersen', 419, 'Disponível');
//        
//        $biblioteca->AdicionaLivro($patinhoFeio);
//        
//        echo $biblioteca->LivrosDisponiveis();
//        
//        echo '<br>';
//        
//        $aluno->PegaLivro($biblioteca->RetiraLivro('Branca de Neve'));
//        
//        echo $biblioteca->LivrosDisponiveis();
        
        ?>
    </body>
</html>
