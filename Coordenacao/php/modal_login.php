<div class="modal fade" id="login" role="dialog">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="login.php" method="post">
                                <label>Login ou Matrícula</label>
                                <input required type="text" name="sis"><br>
                                <label>Senha</label>
                                <input required type="password" name="senha">
                                <select name="radio">
                                    <option value="">--</option>
                                    <option value="Professor">Professor</opiton>
                                    <option value="Aluno">Aluno</opiton>
                                    <option value="Servidor">Servidor</opiton>
                                </select>
                                <input type="submit" name="enviar" value="Login">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-defalut" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>