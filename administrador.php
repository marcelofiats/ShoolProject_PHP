<?php

session_start();

if(isset($_SESSION['login'])){

    

    include 'view/header.php';
    include 'PHP/conexao.php';
    @$pagina = $_GET['pagina'];

    switch($pagina){
        case 'consnome': include 'view/CAlunoNome.php';break;
        case 'consmat': include 'view/CAlunomat.php';break;
        case 'aluno': include 'view/cadastrarAluno.php';break;
        case 'alteraraluno': include 'view/AlterarAluno.php';break;
        case 'delalunonome': include 'view/DeletarAlunoNome.php';break;
        case 'delalunomat' : include 'view/DeletarAlunomat.php';break;
        case 'nomealuno' : include 'PHP/consultar.php';break;
        default: include 'view/home.php';break;
    }

    include 'view/footer.php';

}
else{
    header("location:index.php");
}
?>

    
    
