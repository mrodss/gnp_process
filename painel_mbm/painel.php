<?php
session_start();

$hostname = '127.0.0.1';
$port = '3306';
$database = 'gnp_process';
$username = 'root';
$password = '123456';

$link = mysqli_connect($hostname, $username, $password, $database, $port);

$sql_select = "SELECT id, orgao, status, reserva FROM pmbm";
$handle = mysqli_query($link, $sql_select);

// Verifica se a solicitação de exclusão foi feita
if (isset($_GET['delete_id'])) {
    // Limpa o ID para evitar SQL injection
    $delete_id = mysqli_real_escape_string($link, $_GET['delete_id']);

    // Query para excluir o registro com o ID especificado
    $sql_delete = "DELETE FROM pmbm WHERE id = $delete_id";

    // Executa a query de exclusão
    if (mysqli_query($link, $sql_delete)) {
        echo "Registro excluído com sucesso.";
    } else {
        echo "Erro ao excluir o registro: " . mysqli_error($link);
    }
}
?>
<h2 style="text-align:center; color:steelblue">RELATÓRIO MBM SEGURADORA</h2>

<body>
    <table cellspadding="100" background-color="steelblue" style="width: 100%">
        <tr>
            <th style="color:steelblue">Indice</th>
            <th style="color:steelblue">Órgão</th>
            <th style="color:steelblue">Reserva</th>
            <th style="color:steelblue">Status</th>
            <th style="color:steelblue">Ações</th>
        </tr>

        <?php

        while ($row = mysqli_fetch_assoc($handle)) { ?>
            <tr style="text-align: center; padding: 20px; padding-top: 15px">
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['orgao'] ?></td>
                <td><?php echo $row['reserva'] ?></td>
                <td><?php echo $row['status'] ?></td>

                <td>
                    <a href="editar.php?id=<?php echo $row['id'] ?>" style="text-decoration: none; color:#000">Editar /</a>
                    <a href="painel.php?delete_id=<?php echo $row['id'] ?>" onclick="return confirm('Tem certeza que deseja excluir este registro?')" style="text-decoration: none; color:#000">Deletar</a>
                </td>
            </tr>
        <?php } ?>
    </table>
    <footer>
        <div class="container" style="margin-top: 120px">
            <div class="row">
                <div class="col">
                    <a href="../index.php" style="text-decoration: none; color:#000">Sair</a>
                </div>
            </div>
    </footer>
</body>
<meta http-equiv="refresh" content="0.5; URL='../painel_mbm/painel.php' " />