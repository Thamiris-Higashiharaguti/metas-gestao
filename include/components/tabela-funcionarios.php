<?php
require_once("include/config.php");

$sql = "SELECT * 
         FROM funcionarios";

$result = mysqli_query($con, $sql);
?>

<table class="table table-striped ">
    <thead>
        <tr>
            <th>Funcionário</th>
            <th>Cargo</th>
            <th class="text-center">Ações</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>João</td>
            <td>Vendedor</td>
            <td class="text-center"><?php require("include/components/btn-acoes.php") ?></td>
        </tr>
        <tr>
            <td>Vinicius</td>
            <td>Gestor</td>
            <td class="text-center"><?php require("include/components/btn-acoes.php") ?></td>
        </tr>
        <!-- Resultados do banco -->
        <?php
        if (mysqli_fetch_array($result)) {
            foreach (mysqli_fetch_array($result) as $key => $funcionario) { ?>
                <tr>
                    <td><?= $funcionario['nome'] ?></td>
                    <td><?= $funcionario['cargo'] ?></td>
                    <td class="text-center"><?php require("include/components/btn-acoes.php") ?></td>
                </tr>
            <?php
            }
        } else { ?>
            <tr>
                <td colspan="3" class="text-center">Nenhum resultado encontrado</td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>