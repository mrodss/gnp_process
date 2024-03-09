<?php session_start() ?>
<html>

<body style="background-color:steelblue">

    <h2 style="text-align:center; color:#FFF">PROCESSOS GENTE SEGURADORA</h2>

    <form action="gerenciamento_gente.php" method="post" enctype="multipart/form-data">
        <span><?= (isset($_SESSION['msgErr']['orgao'])) ? $_SESSION['msgErr']['orgao'] : ''; ?></span>
        <label style="color:#FFF">Nome Órgão:</label>
        <input style="width:92%" name="orgao" type="text">
        <br>
        <br>
        <span><?= (isset($_SESSION['msgErr']['reserva'])) ? $_SESSION['msgErr']['reserva'] : ''; ?></span>
        <label style="color:#FFF">Processo/Reserva:</label>
        <input style="width:90%" name="reserva" type="text">
        <br>
        <br>

        <span><?= (isset($_SESSION['msgErr']['status'])) ? $_SESSION['msgErr']['status'] : ''; ?></span>
        <label style="color:#FFF">Status:</label>
        <select name="status">
            <option value="">Escolha</option>
            <option value="analise">Em análise</option>
            <option value="capa">Fazer Capa</option>
            <option value="cadastro">Para Cadastro</option>
            <option value="solicitado">Solicitado</option>
            <option value="transferencia">Transferência</option>
        </select>
        <br>
        <br>
        <input type="submit">
    </form>
    <div class="container" style="width: 100%">
        <div class="row">
            <div class="col">
                <img src="../image/gente.png" alt="GENTE SEGURADORA" style="width: 50%; height: 50%; margin-left:350px">
            </div>
        </div>

        <p style="text-align: center; padding-top:15px; color:#FFF">&copy copyright</p>

        <div class="container" style="margin-top: 70px">
            <div class="row">
                <div class="col">
                    <a href="../index.php" style="color:#FFF; text-decoration: none">Voltar</a>
                </div>
            </div>
</body>

</html>