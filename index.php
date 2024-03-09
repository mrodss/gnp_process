<?php session_start() ?>

<html>

<head>
    <meta charset="utf-8">
    <title>PROCESSOS SEGURADORAS - GNP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Gente, Mapfre, MBM, Porto e Sompo">
    <meta name="author" content="Matheus Mussatto Rodrigues">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/process.css" text="text/css">
</head>

<body style="background-color:#A6A6A6">
    <header>
        <h1 style="text-align: center; margin-top:20px; font-family:Georgia, 'Times New Roman', Times, serif">PROCESSOS SEGURADORAS - GNP SEGUROS</h1>
    </header>

    <main>
        <div class="container" style="margin-top:40px">
            <div class="row">
                <div class="col-sm">
                    <button onclick="window.location.href='seguradora/gente.php'" name="gente">
                        <img src="image/gente.png" alt="GENTE SEGURADORA">
                    </button>
                </div>
                <div class="col-sm">
                    <button onclick="window.location.href='seguradora/mapfre.php'" name="mapfre">
                        <img src="image/mapfre.png" alt="MAPFRE SEGUROS">
                    </button>
                </div>
                <div class="col-sm">
                    <button onclick="window.location.href='seguradora/mbm.php'" name="mbm">
                        <img src="image/mbm.png" alt="MBM SEGURADORA">
                    </button>

                </div>
            </div>
        </div>
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <button onclick="window.location.href='seguradora/porto.php'" name="porto">
                        <img src="image/porto.png" alt="PORTO SEGUROS">
                    </button>
                </div>
                <div class="col-sm">
                    <button onclick="window.location.href='seguradora/sompo.php'" name="sompo">
                        <img src="image/sompo.png" alt="SOMPO SEGURADORA">
                    </button>
                </div>

                <div class="col-sm">
                    <button onclick="window.location.href='seguradora/sura.php'" name="sura">
                        <img src="image/sura.png" alt="SURA">
                    </button>
                </div>
            </div>
        </div>

        <div class="card" style="width: 30%; margin-top: 40px; margin-left: 500px;">
            <img class="card-img-top" src="image/GNP.png" alt="GNP CORRETORA DE SEGUROS" height="100px" width="50px">
            <div class="card-body">
                <h5 class="card-title">GNP CORRETORA DE SEGUROS</h5>
                <a href="http://gnpseguros.com.br" class="btn btn-dark">Visitar</a>
            </div>
        </div>
    </main>
    <p style="text-align: center; padding-top:15px; color:#FFF">&copy copyright</p>
</body>

</html>