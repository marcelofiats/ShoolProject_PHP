<?php
$mat = ($_GET["nome_aluno"]);

#conexao 
include 'conexao.php';

$pesquisa = "SELECT * FROM professos where id_professor = '$mat'";

$acao = mysqli_query($conexao, $pesquisa);

if(mysqli_num_rows ($acao) > 0 )
{
    echo 'matricula encontrado com sucesso';
    
}
else{
    echo "erro na pesquisa";
}


?>