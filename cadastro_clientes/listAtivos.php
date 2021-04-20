<?php
require __DIR__.'/vendor/autoload.php';
include __DIR__.'/includes/header.php';
include __DIR__.'/includes/footer.php';

    $resultados = '';
    foreach($cliente as $c):
        if($c->ativo == 's'):
            $resultados .='<tr>
                                <td>'.$c->nome.'</td>
                                <td>'.$c->cpf.'</td>
                                <td>'.$c->endereco.'</td>
                                <td>'.$c->celular.'</td>
                                <td>'.($c->ativo == 's' ? 'Ativo' : 'Inativo').'</td>
                                
                            </tr>';
        endif;
    endforeach;
?>

<main>
    <section>
        <a href="create.php">
            <button class="btn btn-success">Cadastrar Cliente</button>
        </a>
        <a href="index.php">
            <button class="btn btn-primary">Voltar</button>
        </a>
    </section>

    <section>
        <table class="table" mt-3>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Endereço</th>
                    <th>Celular</th>
                    <th>Status</th>                    
                </tr>
            </thead>
            <tbody>
                <?=$resultados?>
            </tbody>
        </table>
    </section>



</main>