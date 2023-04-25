<?php
require_once("./include/config.php");

$sql = "SELECT * 
         FROM apontamentos a
    LEFT JOIN metas m
           ON a.idMeta = m.idMeta
    LEFT JOIN funcionarios f
           ON m.idFuncionario = f.idFuncionario
        WHERE a.dataExclusao IS NULL";

$result = mysqli_query($con, $sql);
?>

<table class="table table-striped ">
    <thead>
        <tr>
            <th>Funcionário</th>
            <th class="text-center">Meta</th>
            <th class="text-center">Real</th>
            <th class="text-center">Status</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>João</td>
            <td class="text-center">20</td>
            <td class="text-center">18</td>
            <td class="text-center"><i class="fa-solid fa-thumbs-down" style="color:red"></i></td>
        </tr>
        <tr>
            <td>Vinícius</td>
            <td class="text-center">20</td>
            <td class="text-center">23</td>
            <td class="text-center"><i class="fa-solid fa-thumbs-up" style="color:green"></i></td>
        </tr>
        <!-- Resultados do banco -->
        <?php
        if (mysqli_fetch_array($result)) {
            foreach (mysqli_fetch_array($result) as $key => $apontamento) { ?>
                <tr>
                    <td><?= $apontamento['nome'] ?></td>
                    <td class="text-center"><?= $apontamento['valorMeta'] ?></td>
                    <td class="text-center"><?= $apontamento['valorApontamento'] ?></td>
                    <td class="text-center"><i class="fa-solid fa-thumbs-up" style="color:green"></i></td>
                </tr>
            <?php
            }
        } else { ?>
            <tr>
                <td colspan="4" class="text-center">Nenhum resultado encontrado</td> 
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>