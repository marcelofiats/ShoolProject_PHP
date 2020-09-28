
<?php

include 'conexao.php';

$nome = $_GET["nome_aluno"];

$pesquisa = "SELECT * FROM alunos where nome LIKE '$nome%'";

$acao = mysqli_query($conexao, $pesquisa);

