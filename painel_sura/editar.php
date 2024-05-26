<?php
session_start();

$hostname = '127.0.0.1';
$port = '3306';
$database = 'gnp_process';
$username = 'root';
$password = '123456';

$link = mysqli_connect($hostname, $username, $password, $database, $port);

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $sql_select = 'SELECT * FROM psura where id = ' . $_GET['id'];
    $result = mysqli_query($link, $sql_select);

    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    // Definindo valores padrão para as variáveis
    $orgao = $row['orgao'] ?? '';
    $reserva = $row['reserva'] ?? '';
    $status = $row['status'] ?? '';
} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["orgao"])) {
        $error['orgao'] =  "Digite o Nome do Órgão";
    } else {
        $orgao = $_POST["orgao"];
    }

    if (empty($_POST["reserva"])) {
        $error['reserva'] =  "Digite o Número da Reserva";
    } else {
        $reserva = $_POST["reserva"];
    }

    if (empty($_POST["status"])) {
        $error['status'] =  "Selecione o Status";
    } else {
        $status = $_POST["status"];
    }

    $sql = "
        UPDATE psura
        SET 
            orgao='$orgao',
            reserva='$reserva',
            status='$status'
        WHERE id='{$_GET['id']}'
    ";

    $handle = mysqli_query($link, $sql);
    if ($handle) {
        echo '<p style="color:#FFF; text-align: center;"> Você alterou o registro</p>';
    }
}
?>

<body style="background-color:	#00CED1">
    <h2 style="text-align:center; color:#FFF">EDITAR PROCESSOS - SURA SEGUROS</h2>

    <form action="editar.php?id=<?= $_GET['id'] ?>" method="post" enctype="multipart/form-data">

        <span><?= (isset($error['orgao'])) ? $error['orgao'] : ''; ?></span>
        <label style="color:#FFF">Nome Órgão:</label>
        <input style="width:92%" name="orgao" type="text" value="<?= $orgao ?>">
        <br />
        <br />

        <span><?= (isset($error['reserva'])) ? $error['reserva'] : ''; ?></span>
        <label style="color:#FFF">Processo/Reserva:</label>
        <input style="width:91.3%" name="reserva" type="text" value="<?= $reserva ?>">
        <br />
        <br />

        <span><?= (isset($error['status'])) ? $error['status'] : ''; ?></span>
        <label style="color:#FFF">Status:</label>
        <select name="status">
            <option value="solicitado" <?= ($status == 'solicitado') ? 'selected' : '' ?>>Solicitado</option>
            <option value="capa" <?= ($status == 'capa') ? 'selected' : '' ?>>Capa</option>
        </select>
        <br />

        <br />
        <input type="submit" value="Salvar">
    </form>
    <div class="container" style="width: 100%">
        <div class="row">
            <div class="col">
                <img src="../image/sura.png" alt="SURA SEGUROS" style="width: 50%; height: 50%; margin-left:350px">
            </div>
        </div>
        <div class="container" style="margin-top: 120px">
            <div class="row">
                <div class="col">
                    <a href="./painel.php" style="color:#FFF; text-decoration:none">Voltar</a>
                </div>
            </div>
</body>