<?php

//recuperar variavel do formulario

$usuario = $_POST['adm_usuario'];
$senha = $_POST['adm_senha'];
$portal = $_POST['portal'];


include 'conexao.php';

#conexao

$login = "SELECT * FROM $portal WHERE usuario = '$usuario' and senha = '$senha'";
$select = mysqli_query($conexao, $login) or die('erro');
$array = mysqli_fetch_array($select);
$logarray = $array['$usuario'];
if(mysqli_num_rows ($select) > 0 )
{
    
    session_start();
    $_SESSION['login'] = true;
    $_SESSION['adm_usuario'] = $usuario;
    $_SESSION['adm_senha'] = $senha;
    

    header('location:../administrador.php');
    
}
else{ 
    
   echo "<script language='javascript' type='text/javascript'>
        alert('Usuario ou Senha Invalido...')
        window.location.href = '../index.php'
        </script>
    "; 
}

?>

