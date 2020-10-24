<?php
    //A biblioteca de uma universidade deseja fazer um algoritmo que leia o nome do livro que será emprestado, o tipo de usuário (professor ou aluno) e possa imprimir um recibo conforme mostrado a seguir. Considerar que o professor tem 10 dias para devolver o livro o aluno somente 3 dias

    echo "Seja Bem Vindo a Biblioteca Virtual FMG<br>";
    echo "Digite o nome do livro que deseja:<br>";
    echo "Identique - se : Para Professores digite P e para Alunos digite A:<br>";

    $nome_do_livro = $_GET["nome_livro"];
    $id = $_GET["id"];

    switch ($id) {
        case "P":
            echo "Professor<br>";
            echo "Livro: $nome_do_livro<br>";
            echo "Prazo de <b>10 DIAS</b> para entrega.<br>";
            break;
        case "A":
            echo "Aluno<br>";
            echo "Livro: $nome_do_livro<br>";
            echo "Prazo de <b>3 DIAS</b> para entrega.<br>";
            break;
    }
?>