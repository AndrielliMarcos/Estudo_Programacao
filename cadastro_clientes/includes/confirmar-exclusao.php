<main>
    <section>
        
    <section>

    <h2 class="mt-3">Excluir Cliente</h2>

    <form action="" method="post">
        <div class="form-group">
           <p> Deseja excluir o(a) cliente <strong><?=$cliente->nome?></strong>? </p>
        </div>
        
        <div class="form-group">
            <a href="index.php">
                <button type="button" class="btn btn-success">Cancelar</button>
            </a>
            <button type="submit" name="excluir" class="btn btn-danger">Excluir</button>
        </div>           
    </form>
</main>