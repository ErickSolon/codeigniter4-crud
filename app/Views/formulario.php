<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <?php echo form_open('pessoas/store'); ?>
                <div class="form-group">
                    <label for="nome">Nome: </label>
                    <input name="nome" class="form-control" id="nome" value="<?php echo isset($usuario['nome']) ? $usuario['nome'] : "" ?>">
                </div>

                <div class="form-group">
                    <label for="sobrenome">Sobrenome: </label>
                    <input name="sobrenome" class="form-control" id="sobrenome" value="<?php echo isset($usuario['sobrenome']) ? $usuario['sobrenome'] : "" ?>">
                </div>

                <div class="form-group">
                    <label for="idade">Idade: </label>
                    <input name="idade" class="form-control" id="idade" value="<?php echo isset($usuario['idade']) ? $usuario['idade'] : "" ?>">
                </div>

                <div class="form-group">
                    <label for="telefone">Telefone: </label>
                    <input name="telefone" class="form-control" id="telefone" value="<?php echo isset($usuario['telefone']) ? $usuario['telefone'] : "" ?>">
                </div>

                <div class="form-group">
                    <label for="endereco">Endereço: </label>
                    <input name="endereco" class="form-control" id="endereco" value="<?php echo isset($usuario['endereco']) ? $usuario['endereco'] : "" ?>">
                </div>

                <div class="form-group">
                    <?php if (isset($usuario['id'])) : ?>
                        <input type="hidden" name="id" value="<?php echo $usuario['id'] ?>">
                        <input type="submit" value="Editar" class="btn btn-warning">
                    <?php else : ?>
                        <input type="submit" value="Salvar" class="btn btn-success">
                    <?php endif; ?>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>