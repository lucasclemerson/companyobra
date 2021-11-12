<main>
	<h1>Acompanhamento de Obras</h1>

    <form action="<?php echo base_url(); ?>login/verificar_autenticacao_sistema" method="post">
		<div>
            <div class="input-group has-validation">
            	<label for="campo_email">E-mail</label>
                <input type="email" name="email" id="campo_email" class="form-control" maxlength="100" required>
            </div>
        </div>

		<div>
            <div class="input-group has-validation">
            	<label for="campo_senha">Senha</label>
                <input type="password" name="senha" id="campo_senha" class="form-control" maxlength="100" required>
            </div>
        </div>
	</form>
</main>
