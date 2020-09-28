<?php
$local = 'localhost';
$userdb = 'root';
$sworddb = '';
$db = 'project';



$conexao = mysqli_connect($local,$userdb,$sworddb,$db) or die('Erro ao conectar');

$pesquisa_nome = mysqli_query($conexao,'SELECT * FROM alunos where nome LIKE $nome%');

$consulta_alunos = mysqli_query($conexao,"SELECT * FROM alunos");

?>