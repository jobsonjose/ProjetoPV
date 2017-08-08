<div class="modal fade" id="cadastro" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Cadastro</h4>
            </div>
            <div class="modal-body">
                <form action="user_action.php" method="post" >
                    <label for="nome">Nome</label>
                        <input type="text" name="nome">
                    <label for="nome">Login</label>
                        <input type="text" name="login">
                    <label for="aluno">Matrícula</label>
                        <input type="text" name="matricula">
                    <label for="date">Email:</label>
                        <input type="email" name="email">
                    <label for="senha">Senha</label>
                        <input type="password" name="senha">
                    <select name="tipo">
                        <option disabled selected> -- </option>
                        <option value="professor">Professor</option>
                        <option value="servidor">Servidor</option>
                        <option value="aluno">Aluno</option>
                    </select>
                    <input type="submit" value="Enviar" name="submit">
			    </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-window-o">Close</i></button>
            </div>
        </div>
    </div>
</div>