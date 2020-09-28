<?php
$nome = ($_GET["nome_usuario"]);
$nascimento = ($_GET["txtano"]);
$sexo =($_GET["radsex"]);
$email = ($_GET["email"]);
$nick = ($_GET["nick"]);
$senha1 = ($_GET["senha1"]);
$senha2 = ($_GET["senha2"]);

#conexao
include 'conexao.php';

$query = "INSERT INTO professos (Nome, Nascimento, usuario, senha) VALUES('$nome','$nascimento','$nick','$senha1')"

$insert = mysqli_query($conexao, $query);

if($insert){
    echo "Cadastrado com sucesso<br>";
}
else{
    echo "falha no cadastro<br>";
}

?>