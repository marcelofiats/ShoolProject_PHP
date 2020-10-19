<?php
$nome = ($_GET["nome_usuario"]);
$nascimento = ($_GET["txtano"]);
$sexo =($_GET["radsex"]);
$email = ($_GET["email"]);
$cep = ($_GET['cep']);
$rua = ($_GET['rua']);
$num = ($_GET['num']);
$bairro = ($_GET['bairr']);
$cidade = ($_GET['city']);
$estado = ($_GET['estado']);
$comple = ($_GET['comple']);
$cursos = ($_GET['curso']);
$nick = ($_GET["nick"]);
$senha1 = ($_GET["senha1"]);
$senha2 = ($_GET["senha2"]);

echo $nascimento;

#conexao
include 'conexao.php';

if($senha1 != $senha2){
    
    echo "<script language='javascript' type='text/javascript'>
    alert('Senhas Digitadas são diferentes...')
    window.location.href = 'http://localhost/Escola/administrador.php?pagina=aluno'
    </script>";
}
else{
$query = "INSERT INTO alunos (nome, nascimento, email, CEP, rua, numero, bairro, cidade, estado, complemento, curso, usuario, senha) 
                    VALUES('$nome','$nascimento','$email','$cep','$rua','$num','$bairro','$cidade','$estado','$comple','$curso','$nick','$senha1')";

$executar = mysqli_query($conexao, $query);

if($executar){
    echo "<script language='javascript' type='text/javascript'>
    alert('Aluno Cadastrado com sucesso...')
    window.location.href = 'http://localhost/Escola/administrador.php?pagina=aluno'
    </script>
";
}
else{
    echo "<script language='javascript' type='text/javascript'>
    alert('Falha no Cadastrado...')
    window.location.href = 'http://localhost/Escola/administrador.php?pagina=aluno'
    </script>";
}
}

?>