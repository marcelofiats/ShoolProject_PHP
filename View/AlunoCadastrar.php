    <form action="../PHP/cadastroAluno.php" method="POST">
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
                <p id="comple">Complemento:<input type="text" name="comple" id="comple" size="30"></p>
                <p  id="bairro">Bairro:<input type="text" name="bairr" id="bairr" size="30"></p>
                <p  id="cit">Cidade:<input type="text" name="city" id="city" size="30">
                Estado:<input type="text" name="estado" id="estado" size="2"></p>
                <p  id="curso">Curso:<input type="text" name="curso" id="curso" size="30"></p>

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
        </div>
        