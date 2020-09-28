
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
                                    <li onclick='cnome()'>Por Nome</li>
                                    <li onclick="cmatricula()">Por Matricula</li>
                                </ul>
                                </div>
                                <a href="?pagina=cadastraraluno">Cadastrar</a>

                                <input type="checkbox" id="alt"/>
                                <label for="alt" onclick="alterar()"><div id="menu4">Alterar</div></label>
                        <input type="checkbox" id="del"/>
                        <label for="del"><div id="menu5">Deletar</div></label>
                            <div id="deletar">
                            <ul>
                                <li onclick="deletar()">Por Nome</li>
                                <li onclick="deletarm()">Por Matricula</li>
                            </ul>
                        </div>
                        </div>

                        <!--Menu Professor-->

                        <input type="checkbox" id="boxp">
                        <label for="boxp"><div id="menup1">Professor</div></label>
                        <div id="professor">
                            <ul>
                            <input type="checkbox" id="consp"/>
                            <label for="consp"><div id="menup2">Consultar</div></label>
                                <div id="consultap">
                                <ul>
                                    <li onclick='Pcnome()'>Por Nome</li>
                                    <li onclick="Pmatriculac()">Por Codigo</li>
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