<?php require "../bootstrap.php"; ?>

<!doctype html>
<html lang="pt-BR">
    <head>
        <!-- Meta -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Trabalho Grau B</title>

        <!--[if lt IE 9]>
            <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
        <![endif]-->

        <link href="../../public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../../public/css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Hospital Passe Bem</a>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="container">
            <div class="row">
                <div class="alert alert-info col">
                    <h2 class="text-center">Lista de prioridades</h2>
                    <ul class="prioridades">
                        <li><strong>Vermelho (0):</strong> quadro clínico implica em risco de morte e o caso deve ser rapidamente encaminhado para a sala de emergência.</li>
                        <li><strong>Laranja (1):</strong> o paciente não tem risco iminente de morte, mas o atendimento é prioritário, pois o tempo de espera pode aumentar consideravelmente a gravidade do caso.</li>
                        <li><strong>Amarelo (2):</strong> o paciente não tem risco iminente de morte, mas o atendimento é prioritário, pois o tempo de espera pode aumentar a gravidade do caso.</li>
                        <li><strong>Verde (3):</strong> não há risco de morte.</li>
                        <li><strong>Azul (4):</strong> quadros crônicos, sem sofrimento agudo. Neste caso, o paciente será encaminhado ao centro de saúde.</li>
                    </ul>
                </div>
            </div>