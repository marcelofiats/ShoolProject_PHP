<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=700px, initial-scale=0.4">
    	<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Projeto Escola</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	</head>
	<body onload="transicao()">
		
		<div id="interface">
			<header id="cabecalho">
				<h1>Nome da Escola</h1>
				<h2>Ensino Fundamental</h2>
			<nav id="menu">
				<ul type="disc">
					<li id="muda"><a href="index.php">Home</a></li>
					<li><a href="Escola.html">Escola</a></li>
					<li><a href="Cursos.html">Cursos</a></li>
					<li><a href="Biblioteca.html">Biblioteca</a></li>
					<li><a href="Contatos.html">Contatos</a></li>
				</ul>
			</nav>
			</header>
			<section id="principal">
				 <!-- Principal Section with the gallery code. If you want use only gallery code,
             you can copy all code bellow, with gallery-container.-->
			 <section class="container gallery-container">

					<!--Slide-->
					<div class="mySlides fade"> <!-- 01 -->
						<div class="numbertext">01 / 04</div>
						<img class="imgslide" src="Imagens/noticia1.png"/>
						<div class="text">Descriçaõ da noticia1 e link</div>
					</div>
		
					<div class="mySlides fade"> <!-- 02 -->
						<div class="numbertext">02 / 04</div>
						<img class="imgslide" src="Imagens/noticia2.png"/>
						<div class="text">Descriçaõ da noticia2 e link</div>						
					</div>
		
					<div class="mySlides fade"> <!-- 03 -->
						<div class="numbertext">03 / 04</div>
						<img class="imgslide" src="Imagens/noticia3.png"/>
						<div class="text">Descriçaõ da noticia3 e link</div>
					</div>
		
					<div class="mySlides fade"> <!-- 04 -->
						<div class="numbertext">04 / 04</div>
						<img class="imgslide" src="Imagens/noticia4.png"/>
						<div class="text">Descriçaõ da noticia4 e link</div>
					</div>
		
					<!--Final Slides-->
		
					<!--Navigation-->
					<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
					<a class="next" onclick="plusSlides(1)">&#10095;</a>
				</section>
			</section>
			<aside id="lateral">
				<form action="PHP/adm.php" method="POST">
					<fieldset>
						<legend>Administração</legend>
						<p>Usuario: <input type="text" name="adm_usuario" id="adm_usuario"/></p>
						<p>&nbsp&nbspSenha: <input type="password" name="adm_senha" id="adm_senha" size="15" maxlength="12" /></p>
						<label style="margin-left: 10px;">Portal</label>
						<div class="portal">
							<input type="radio" name="portal" value = "Alunos" checked="true"/><label>Aluno</label>
							<input type="radio" name="portal" value = "Professor" /><label>Professor</label>
							<input type="radio" name="portal" value = "Administrador" /><label>Admin</label>
						</div>
						<p><input type="submit" value="Entrar" class="button"/></p>
					</fieldset>
				</form>

			</aside>

			<footer id="rodape">
				<p>Copyright &copy; 2019 - by Marcelo Fiats</p>
				<p>(19)99154-2927</p>
				<p><a href="https://www.facebook.com/marcelofiats.dasilva" target="_blank">Facebook</a>| <a href="https://www.linkedin.com/in/marcelo-fiats-da-silva-5b00b297/" target="_blank">LinkedIn</a></p>
			</footer>
			
		</div>
		<script type="text/javascript" src="java\bootstrap.min.js"></script>
		<script type="text/javascript" src="java\jquery-3.4.1.min.js"></script>
		<script type="text/javascript" src="java\js.js"></script>
	</body>




</html>