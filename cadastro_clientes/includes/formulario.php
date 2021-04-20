<main>
    <section>
        <a href="index.php">
            <button class="btn btn-success">Voltar</button>
        </a>
    <section>

    <h2 class="mt-3"><?=TITLE?></h2>

    <form action="" method="post">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" class="form-control" value="<?= isset($cliente)?$cliente->nome:''?>">
        </div>
        <div class="form-group">
            <label for="cpf">CPF:</label>
            <input type="text" name="cpf" class="form-control" value="<?= isset($cliente)?$cliente->cpf:''?>">
        </div>
        <div class="form-group">
            <label for="endereco">Endereço:</label>
            <input type="text" name="endereco" class="form-control" value="<?= isset($cliente)?$cliente->endereco:''?>">
        </div>
        <div class="form-group">
            <label for="celular">Celular:</label>
            <input type="text" name="celular" class="form-control" value="<?= isset($cliente)?$cliente->celular:''?>">
        </div>
        <div class="form-group">
            <label>Status do Cliente</label>
            <div>
                <div class="form-check form-check-inline">
                    <label>
                        <input type="radio" name="ativo" value='s' checked>Ativo
                        </input>
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label>
                        <input type="radio" name="ativo" value='n' >Inativo
                        </input>
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>           
    </form>
</main>