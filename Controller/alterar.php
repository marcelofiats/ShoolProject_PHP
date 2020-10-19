<?php
$mat = ($_POST["nome_aluno"]);

#conexao 

$conexao = mysqli_connect('https://databases-auth.000webhost.com/index.php','id10669680_marcelo','fiats8702','id10669680_projeto') or die('Erro ao conectar');

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