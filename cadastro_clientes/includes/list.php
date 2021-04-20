<?php
    $resultados = '';
    foreach($cliente as $c):
        $resultados .='<tr>
                            <td>'.$c->nome.'</td>
                            <td>'.$c->cpf.'</td>
                            <td>'.$c->endereco.'</td>
                            <td>'.$c->celular.'</td>
                            <td>'.($c->ativo == 's' ? 'Ativo' : 'Inativo').'</td>
                            <td>
                                <a href="edit.php?id=' .$c->id. '">
                                    <button type="button" class="btn btn-primary">Editar</button>
                                </a>
                                <a href="delete.php?id=' .$c->id. '">
                                    <button type="button" class="btn btn-danger">Excluir</button>
                                </a>
                            </td>
                        </tr>';
    endforeach;
?>

<main>
    <section>
        <a href="create.php">
            <button class="btn btn-success">Cadastrar Cliente</button>
        </a>
        <a href="listAtivos.php">
            <button class="btn btn-primary">Clientes Ativos</button>
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
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?=$resultados?>
            </tbody>
        </table>
    </section>



</main>