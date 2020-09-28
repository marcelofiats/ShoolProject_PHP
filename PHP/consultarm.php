<?php
$mat = $_GET["matricula"];


#conexao 

include 'conexao.php';

$pesquisa = "SELECT * FROM alunos where matricula = '$mat'";

$acao = mysqli_query($conexao, $pesquisa);

if(mysqli_num_rows ($acao) > 0 )
{
    $linha = mysqli_fetch_array($acao);
    ?>
    <input type="text" name="idAluno" value="<?php echo $linha['nome']; ?> ">
    <?php

    
}
else{
    echo "erro na pesquisa";
}

?>