<?php
$nome = ($_GET["nome_aluno"]);

#conexao 

$pesquisa = "SELECT * FROM alunos where nome = '$nome'";

$acao = mysqli_query($conexao, $pesquisa);

if(mysqli_num_rows ($acao) > 0 )
{
    echo 'nome encontrado com sucesso';
    
}
else{
    echo "erro na pesquisa";
}


?>