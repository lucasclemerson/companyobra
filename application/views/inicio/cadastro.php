<main>
	<h1>Acompanhamento de Obras</h1>

    <form action="<?php echo base_url(); ?>inicio/cadastrar_novo_functionario" method="post">
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

        <div>
            <div class="input-group has-validation">
            	<label for="campo_funcao">Funcionário</label>
                
                <select class="form-select" aria-label="Default select example" name="funcao" id="campo_funcao">
                    <option select value="0">Selecione sua função</option>
                    <option value="1">Engenheiro (a)</option>
                    <option value="2">Mestre de obra</option>
                    <option value="3">Corporativo</option>
                </select>
            
            </div>
        </div>


        <div>
			<button id="btn-login" type="reset">Já tem cadastro</button>
			<button type="submit">Cadastrar</button>
		</div>

	</form>
</main>
