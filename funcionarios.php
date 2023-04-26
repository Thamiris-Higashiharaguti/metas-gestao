<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionários</title>
    <?php require_once("include/include-geral.php") ?>
</head>

<body>

    <!-- Início Header -->
    <?php require_once("include/components/header.php") ?>
    <!-- Fim Header -->

    <div class="card filtros">
        <!-- Início Filtros Tabela -->
        <div class="row align-items-center">
            <div class="col-9">
                <input type="text" class="form-control" id="f_buscaFuncionario" name="f_buscaFuncionario" placeholder="Pesquisar...">
            </div>
            <div class="col btn-busca">
                <button type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
            <div class="col">
                <button type="button" class="btn btn-adicionar align-items-center" data-bs-toggle="modal" data-bs-target="#cadastroFuncionarioModal"><i class="fa-solid fa-circle-plus"></i> Adicionar</button>
            </div>
        </div>
        <!-- Fim Filtro Tabela -->
    </div>

    <div class="card">
        <!-- Início Tabela -->
        <div class="row">
            <div class="col">
                <?php require_once("include/components/tabela-funcionarios.php") ?>
            </div>
        </div>
        <!-- Fim Tabela -->
    </div>

    <!-- Modal Cadastro Funcionário-->
    <div class="modal fade" id="cadastroFuncionarioModal" tabindex="-1" aria-labelledby="cadastroFuncionario" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title subtitulo" id="cadastroFuncionario">Cadastrar Funcionário</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="f_nome" class="form-label">Nome Completo</label>
                    <input type="text" class="form-control" id="f_nome" name="f_nome" value="">
                    <label for="f_cargo" class="form-label mt-2">Cargo</label>
                    <input type="text" class="form-control" id="f_cargo" name="f_cargo" value="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-salvar">Salvar</button>
                </div>
            </div>
        </div>
    </div>


    <script>
        $('#f_buscaFuncionario').keyup(function() {
            console.log('buscou');
        })
    </script>
</body>

</html>