<!doctype html>
<html lang="en">

<head>
    <title>Estudo Codeigniter</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <style>
        .pagination {
            display: flex;
            list-style: none;
            padding: 0;
            justify-content: center;
        }

        .pagination li {
            margin: 0 5px;
        }

        .pagination a,
        .pagination span {
            display: inline-block;
            padding: 10px 15px;
            text-decoration: none;
            color: #007bff;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        .pagination a:hover {
            background-color: #007bff;
            color: #fff;
        }

        .pagination .active a {
            background-color: #007bff;
            color: #fff;
            cursor: default;
        }

        .pagination span {
            color: #555;
            cursor: default;
        }

        .pagination .disabled a,
        .pagination .disabled span {
            color: #ccc;
            pointer-events: none;
        }

        .pagination a,
        .pagination span,
        .pagination .active a,
        .pagination .disabled a,
        .pagination .disabled span {
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .pagination a,
        .pagination span {
            transition: box-shadow 0.3s;
        }

        .pagination a:hover,
        .pagination .active a {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>

    <script>
        function confirmar() {
            if (!confirm(`Deseja deletar mesmo?`)) {
                return false
            } else {
                return true
            }
        }
    </script>

    <div class="table-responsive">
        <?php echo anchor('pessoas/create', 'Adicionar', ['class' => 'btn btn-success']) ?>

        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Sobrenome</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dados as $dado) : ?>
                    <tr class="">
                        <td scope="row"><?= $dado['nome'] ?></td>
                        <td scope="row"><?= $dado['sobrenome'] ?></td>
                        <td scope="row"><?= $dado['idade'] ?></td>
                        <td scope="row"><?= $dado['telefone'] ?></td>
                        <td scope="row"><?= $dado['endereco'] ?></td>
                        <td scope="row">
                            <?php echo anchor('pessoas/edit/' . $dado['id'], 'Editar', ['class' => 'btn btn-warning']) ?>
                            <?php echo anchor('pessoas/delete/' . $dado['id'], 'Deletar', ['onclick' => 'return confirmar()', 'class' => 'btn btn-danger']) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?= $pagina->links() ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>