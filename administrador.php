<?php

session_start();

if(isset($_SESSION['login'])){

    

    include 'view/Administrador/header.php';
    include 'Controller/conexao.php';
    @$pagina = $_GET['pagina'];

    switch($pagina){
        case 'consnome': include 'view/Administrador/AlunoLista.php';break;
        case 'aluno': include 'view/Administrador/AlunoCadastrar.php';break;
        case 'alteraraluno': include 'view/Administrador/AlunoAlterar.php';break;
        case 'delalunonome': include 'view/Administrador/DeletarAlunoNome.php';break;
        case 'delalunomat' : include 'view/Administrador/DeletarAlunomat.php';break;
        case 'nomealuno' : include 'controller/consultar.php';break;
        default: include 'view/Administrador/home.php';break;
    }

    include 'view/Administrador/footer.php';

}
else{
    header("location:index.php");
}
?>

    
    
