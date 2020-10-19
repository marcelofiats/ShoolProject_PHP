<aside id="lateral">
    <form action="controller/adm.php" method="POST">
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