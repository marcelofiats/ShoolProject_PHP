
// Aluno
function cnome() {
    var divi = window.document.querySelector('div#formulario')
    divi.innerHTML = `<p>Digite o nome a pesquisar</p>
    <form method="get">
    <div>
     <p id="nome">Nome: <input type="text" name="nome_aluno" id="nome_aluno" size="30">
     <input type="submit" value="Consultar" id="botao" width="100px"></p>
     </div>
     </form>
     `
}

function cmatricula() {
    var divi = window.document.querySelector('div#formulario')
    divi.innerHTML = `<p>Digite a Matricula a pesquisar</p>
     <form action="PHP/consultarm.php" method="get">
     <div>
      <p id="nome">Matricula: <input type="text" name="matricula" id="matricula" size="30">
      <input type="submit" value="Consultar" id="botao" width="100px"></p>
      </div>
      </form>`
}

function cadastrar() {
    var divi = window.document.querySelector('div#formulario')
    divi.innerHTML = `<form action="PHP/cadastroAluno.php" method="get">
    <div>
    <p><h2>Cadastro de Aluno</h2></p>

     <p id="nome">Nome: <input type="text" name="nome_usuario" id="nome_usuario" size="30"></p>
     <p id="nasc">Ano de Nascimento: <input type="date" name="txtano" id="txtano" min="0" ></p>
     <p>Sexo: 
         <input type="radio" name="radsex" id="mas" checked>
         <label for="mas">Masculino</label>
         <input type="radio" name="radsex" id="fem">
         <label for="fem">Feminino</label>
    </p>
    <p id="email">E-mail: <input type="text" name="email" id="email" size="30"></p>

    
    <p><h3>Endereço</h3></p> 
    <p  id="cep">CEP:<input type="text" name="cep" id="cep" size="10">
    <p  id="rua">Rua:<input type="text" name="rua" id="rua" size="30">
    Numero:<input type="text" name="num" id="num" size="8"></p>
    <p id="comple">Complemento:<input type="text name="comple" id="comple" size="30"></p>
    <p  id="bairro">Bairro:<input type="text" name="bairr" id="bairr" size="30"></p>
    <p  id="cit">Cidade:<input type="text" name="city" id="city" size="30">
    Estado:<input type="text" name="estado" id="estado" size="2"></p>

    <p id="usuario">Nome de Usuario: <input type="text" name="nick" id="nick"></p>
    <p class="obs"> *minimo 8 caracteres</p>
    <p id="senha">Senha: <input type="password" name="senha1" id="senha1"></p>
    <p class="obs"> *de 6 a 12 caracteres</p>
    <p id="repsenha">Repetir senha: <input type="password" name="senha2" id="senha2" onload="aviso()"></p>
    <p class="obs"> *de 6 a 12 caracteres</p>    
</form>
     <p>
         <input type="submit" value="Cadastrar" id="botao" width="100px">
    </p>

    </div>`

}
function alterar() {
    var divi = window.document.querySelector('div#formulario')
    divi.innerHTML = `<form action="PHP/alterar.php" method="get">
    <div>
      <p id="nome">Matricula: <input type="text" name="matricula" id="matricula" size="30">
      <input type="submit" value="Consultar" id="botao" width="100px"></p>
      </div>
      </form>`
}

function deletar() {
    var divi = window.document.querySelector('div#formulario')
    divi.innerHTML = `<form action="PHP/deletar.php" method="get">
    <div>
     <p id="nome">Nome: <input type="text" name="nome_aluno" id="nome_aluno" size="30">
     <input type="submit" value="Consultar" id="botao" width="100px"></p>
     </div>
     </form>`
}

function deletarm() {
    var divi = window.document.querySelector('div#formulario')
    divi.innerHTML = `<form action="PHP/deletarm.php" method="get">
    <div>
      <p id="nome">Matricula: <input type="text" name="matricula" id="matricula" size="30">
      <input type="submit" value="Consultar" id="botao" width="100px"></p>
      </div>
      </form>`
}



function modelo() {
    var divi = window.document.querySelector('div#formulario')
    divi.innerHTML = `<form action="cadastroAluno.php" method="get">`
}





//Professor

function cnomep() {
    var divi = window.document.querySelector('div#formulario')
    divi.innerHTML = `<p>Digite o nome a pesquisar</p>
     <form action="PHP/Pconsultar.php" method="get">
     <div>
      <p id="nome">Nome: <input type="text" name="nome_aluno" id="nome_aluno" size="30">
      <input type="submit" value="Consultar" id="botao" width="100px"></p>
      </div>
      </form>`
}

function Pmatriculac() {
    var divi = window.document.querySelector('div#formulario')
    divi.innerHTML = `<p>Digite a Matricula a pesquisar</p>
      <form action="PHP/Pconsultarm.php" method="get">
      <div>
       <p id="nome">Matricula: <input type="text" name="matricula" id="matricula" size="30">
       <input type="submit" value="Consultar" id="botao" width="100px"></p>
       </div>
       </form>`
}

function Pcadastrar() {
    var divi = window.document.querySelector('div#formulario')
    divi.innerHTML = `<form action="PHP/cadastroProf.php" method="get">
     <div>
     <p><h2>Cadastro de Aluno</h2></p>
 
      <p id="nome">Nome: <input type="text" name="nome_usuario" id="nome_usuario" size="30"></p>
      <p id="nasc">Ano de Nascimento: <input type="date" name="txtano" id="txtano" min="0" ></p>
      <p>Sexo: 
          <input type="radio" name="radsex" id="mas" checked>
          <label for="mas">Masculino</label>
          <input type="radio" name="radsex" id="fem">
          <label for="fem">Feminino</label>
     </p>
     <p id="email">E-mail: <input type="text" name="email" id="email" size="30"></p>
     <p id="materia">Materias a Lecionar: <input type="text" name="mat" id="mat" size="30"></p>
 
     
     <p><h3>Endereço</h3></p> 
     <p  id="cep">CEP:<input type="text" name="cep" id="cep" size="10">
     <p  id="rua">Rua:<input type="text" name="rua" id="rua" size="30">
     Numero:<input type="text" name="num" id="num" size="8"></p>
     <p id="comple">Complemento:<input type="text name="comple" id="comple" size="30"></p>
     <p  id="bairro">Bairro:<input type="text" name="bairr" id="bairr" size="30"></p>
     <p  id="cit">Cidade:<input type="text" name="city" id="city" size="30">
     Estado:<input type="text" name="estado" id="estado" size="2"></p>
 
     <p id="usuario">Nome de Usuario: <input type="text" name="nick" id="nick"></p>
     <p class="obs"> *minimo 8 caracteres</p>
     <p id="senha">Senha: <input type="password" name="senha1" id="senha1"></p>
     <p class="obs"> *de 6 a 12 caracteres</p>
     <p id="repsenha">Repetir senha: <input type="password" name="senha2" id="senha2" onload="aviso()"></p>
     <p class="obs"> *de 6 a 12 caracteres</p>    
 </form>
      <p>
          <input type="submit" value="Cadastrar" id="botao" width="100px">
     </p>
 
     </div>`

}
function Palterar() {
    var divi = window.document.querySelector('div#formulario')
    divi.innerHTML = `<form action="PHP/Palterar.php" method="get">
     <div>
       <p id="nome">Matricula: <input type="text" name="matricula" id="matricula" size="30">
       <input type="submit" value="Consultar" id="botao" width="100px"></p>
       </div>
       </form>`
}

function Pdeletar() {
    var divi = window.document.querySelector('div#formulario')
    divi.innerHTML = `<form action="PHP/Pdeletar.php" method="get">
     <div>
      <p id="nome">Nome: <input type="text" name="nome_aluno" id="nome_aluno" size="30">
      <input type="submit" value="Consultar" id="botao" width="100px"></p>
      </div>
      </form>`
}

function Pdeletarm() {
    var divi = window.document.querySelector('div#formulario')
    divi.innerHTML = `<form action="PHP/Pdeletarm.php" method="get">
     <div>
       <p id="nome">Matricula: <input type="text" name="matricula" id="matricula" size="30">
       <input type="submit" value="Consultar" id="botao" width="100px"></p>
       </div>
       </form>`
}



function Pmodelo() {
    var divi = window.document.querySelector('div#formulario')
    divi.innerHTML = `<form action="cadastroAluno.php" method="get">`
}