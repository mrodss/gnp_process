<?php session_start() ?>

<head>
    <meta charset="utf-8">
    <title>RELATÓRIOS SEGURADORAS - GNP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Gente, Mapfre, MBM, Porto e Sompo">
    <meta name="author" content="Matheus Mussatto Rodrigues">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/process.css" text="text/css">
</head>

<body style="background-color:#A6A6A6">
    <header>
        <h1 style="text-align: center; margin-top:20px; font-family:Georgia, 'Times New Roman', Times, serif">RELATÓRIOS SEGURADORAS - GNP SEGUROS</h1>
    </header>

    <main>
        <div class="container" style="margin-top:40px">
            <div class="row">
                <div class="col-sm">
                    <button onclick="window.location.href='http://localhost/gnp_process/painel_gente/painel.php'" name="gente">
                        <img src="image/gente.png" alt="GENTE SEGURADORA">
                    </button>
                </div>
                <div class="col-sm">
                    <button onclick="window.location.href='http://localhost/gnp_process/painel_mapfre/painel.php'" name="mapfre">
                        <img src="image/mapfre.png" alt="MAPFRE SEGUROS">
                    </button>
                </div>
                <div class="col-sm">
                    <button onclick="window.location.href='http://localhost/gnp_process/painel_mbm/painel.php'" name="mbm">
                        <img src="image/mbm.png" alt="MBM SEGURADORA">
                    </button>

                </div>
            </div>
        </div>
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <button onclick="window.location.href='http://localhost/gnp_process/painel_porto/painel.php'" name="porto">
                        <img src="image/porto.png" alt="PORTO SEGUROS">
                    </button>
                </div>
                <div class="col-sm">
                    <button onclick="window.location.href='http://localhost/gnp_process/painel_sompo/painel.php'" name="sompo">
                        <img src="image/sompo.png" alt="SOMPO SEGURADORA">
                    </button>
                </div>

                <div class="col-sm">
                    <button onclick="window.location.href='http://localhost/gnp_process/painel_sura/painel.php'" name="sura">
                        <img src="image/sura.png" alt="SURA SEGURADORA">
                    </button>
                </div>
            </div>
        </div>

        <div class="container" style="margin-top: 120px">
            <div class="row">
                <div class="col">
                    <a href="index.php" style="color:#FFF; text-decoration:none">Voltar</a>
                </div>
    </main>

    <footer style="margin-top:90px">
        <p style="text-align: center; padding-top:15px; color:#FFF">&copy copyright</p>
    </footer>