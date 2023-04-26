<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Metas dos Funcionários</title>
    <?php require_once("include/include-geral.php") ?>

</head>

<body>

    <!-- Início Header -->
    <?php require_once("include/components/header.php") ?>
    <!-- Fim Header -->

    <div class="card">
        <!-- Início Filtros Tabela -->
        <div class="row filtro-tabela-visualizar">
            <div class="col">
                <?php require_once("include/components/select-mes.php") ?>
            </div>
            <div class="col">
                <?php require_once("include/components/select-ano.php") ?>
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