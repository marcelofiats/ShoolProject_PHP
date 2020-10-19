<?php
include 'View/Home/header.php';
include 'View/Home/menu.php';
include 'View/Home/asideLateral.php';

@$pagina = $_GET['pagina'];

    switch($pagina){
        case 'escola': include 'view/Home/escola.php';break;
        case 'cursos': include 'view/Home/cursos.php';break;
        case 'biblioteca': include 'view/Home/biblioteca.php';break;
        case 'contatos' : include 'view/Home/contatos.php';break;
        default: include 'view/Home/home.php';break;
    }


include 'View/Home/footer.php'
?>