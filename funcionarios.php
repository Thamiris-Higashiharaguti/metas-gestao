<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionários</title>
    <?php require_once("include/css-geral.php") ?>
</head>

<body>

    <!-- Início Header -->
    <?php require_once("./include/components/header.php") ?>
    <!-- Fim Header -->

    <div class="card filtros">
        <!-- Início Filtros Tabela -->
        <div class="row align-items-center">
            <div class="col-9 busca">
                <input type="text" class="form-control" id="f_buscaFuncionario" name="f_buscaFuncionario" placeholder="Pesquisar...">
            </div>
            <div class="col btn-busca">
                <button type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
                <div class="col">
                    <button type="button" class="btn btn-adicionar align-items-center"><i class="fa-solid fa-circle-plus"></i> Adicionar</button>
                </div>
            </div>
            <!-- Fim Filtro Tabela -->
        </div>

        <div class="card">
            <!-- Início Tabela -->
            <div class="row tabela-visualizar">
                <div class="col">
                    <?php require_once("include/components/tabela-visualizar.php") ?>
                </div>
            </div>
            <!-- Fim Tabela -->
        </div>

</body>

</html>