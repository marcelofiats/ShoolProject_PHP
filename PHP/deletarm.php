<?php

include 'conexao.php';

$mat = ($_GET["nome_aluno"]);

$pesquisa = "SELECT * FROM alunos where matricula = '$mat'";

$acao = mysqli_query($conexao, $pesquisa);

if(mysqli_num_rows ($acao) > 0 )
{
    echo 'matricula encontrado com sucesso';
    
}
else{
    echo "erro na pesquisa";
}


?>