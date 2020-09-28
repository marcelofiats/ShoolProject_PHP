    <header>
    <h1>Cadastrar Professor</h1>
    </header>

    <section>
        <form action="cadastro.php" method="get">
        <div>
         <p id="nome">Nome: <input type="text" name="nome_usuario" id="nome_usuario" size="30"></p>
         <p>Ano de Nascimento: <input type="date" name="txtano" id="txtano" min="0" ></p>
         <p>Sexo: 
             <input type="radio" name="radsex" id="mas" checked>
             <label for="mas">Masculino</label>
             <input type="radio" name="radsex" id="fem">
             <label for="fem">Feminino</label>
        </p>
        <p id="email">E-mail: <input type="text" name="email" id="email" size="30"></p>
        <p id="materia">Materia: <input type="text" name="materia" id="materia" size="30"></p>
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

        </div>
        <div id="res">
            Preencha os dados acima para se cadastrar!
        </div>
    </section>