<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administração</title>
    <link rel="stylesheet" type="text/css" href="css\cadastrar.css">
    <link rel="stylesheet" type="text/css" href="css\adm.css">
    
</head>
<body>
            <?php if(isset($_SESSION['login'])){ ?>
            <a href="view/logout.php"><input id="sair" type="button" value= "<?php echo $_SESSION['adm_usuario']; ?> (Sair)"></a>
            <?php } ?>
    <div id="menu">
            <input type="checkbox" id="check">
            <label id="icone" for="check"><img src="Imagens\icone.png"></label>
            
            <div class="barra">
                <nav>
                    
                    <!--Menu Aluno-->
                        <input type="checkbox" id="box"/>
                        <label for="box"><div id="menu1">Aluno</div></label>
                        <div id="aluno">
                            <ul>
                            <input type="checkbox" id="cons"/>
                            <label for="cons"><div id="menu2">Consultar</div></label>
                                <div id="consulta">
                                <ul>
                                <li><a href="?pagina=consnome" style="text-decoration: none; color:black;">Por Nome</a></li>
                                <li><a href="?pagina=consmat" style="text-decoration: none; color:black;">Por Matricula</a></li>
                                </ul>
                                </div>
                                
                                <div id="menu3"><a href="?pagina=aluno" style="text-decoration: none; color:black;">Cadastrar</a></div>
                                

                                
                                <a href="?pagina=alteraraluno" style="text-decoration: none; color:black;"><div id="menu4">Alterar</div></a>
                        <input type="checkbox" id="del"/>
                        <label for="del"><div id="menu5">Deletar</div></label>
                            <div id="deletar">
                            <ul>
                                <li><a href="?pagina=delalunonome" style="text-decoration: none; color:black;">Por Nome</a></li>
                                <li><a href="?pagina=delalunomat" style="text-decoration: none; color:black;">Por Matricula</a></li>
                            </ul>
                        </div>
                        </div>
                    </ul>

                        <!--Menu Professor-->

                        <input type="checkbox" id="boxp">
                        <label for="boxp"><div id="menup1">Professor</div></label>
                        <div id="professor">
                            <ul>
                            <input type="checkbox" id="consp"/>
                            <label for="consp"><div id="menup2">Consultar</div></label>
                                <div id="consultap">
                                <ul>
                                    <li href="?pagina=resultado">Por Nome</li>
                                    <li>Por Codigo</li>
                                </ul>
                                </div>
                            
                                <input type="checkbox" id="cadp"/>
                                <label for="cadp" onclick="Pcadastrar()"><div id="menup3">Cadastrar</div></label>

                                <input type="checkbox" id="altp"/>
                                <label for="altp" onclick="Palterar()"><div id="menup4">Alterar</div></label>
                        <input type="checkbox" id="delp"/>
                        <label for="delp"><div id="menup5">Deletar</div></label>
                            <div id="deletarp">
                            <ul>
                                <li onclick="Pdeletar()">Por Nome</li>
                                <li onclick="Pdeletarm()">Por Codigo</li>
                            </ul>
                        </div>
                        </div>
                    </ul>
                </nav>
                
            </div>
        </div>
    
<div id="principal">