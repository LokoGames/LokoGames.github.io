<?php
require_once("utils.php");
?>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Donato Constructora</title>
</head>

<body class="bg-white text-white mainPage">
    <nav class="navbar navbar-expand-lg bg-dark text-orange">
        <a class="navbar-brand text-orange" href=".">
            <img src="dnt.png" width="50" height="50" class="d-inline-block align-center" alt="" loading="lazy">
            Donato Construtora
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link text-orange active" href="#about">Sobre<span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link text-orange" href="#about">Missão<span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link text-orange" href="#contato">Contato<span class="sr-only">(current)</span></a>
                <div class="nav-item dropdown">
                    <a class="btn btn-secondary dropdown-toggle bg-dark text-orange" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        False Conosco
                    </a>
                    <div class="dropdown-menu bg-dark text-orange" aria-labelledby="dropdownMenu" id="contHolder">
                        <form class="dropdown-item">
                            <!-- Nome -->
                            <label for="nomeInp"><strong class="text-orange">Nome</strong></label>
                            <input type="text" class="form-control" id="nomeInp" name="nome">
                            <!-- Email -->
                            <label for="emailInp"><strong class="text-orange">Email</strong></label>
                            <input type="text" class="form-control" id="emailInp" name="email">
                            <!-- Texto -->
                            <label for="txtInp"><strong class="text-orange">Mensagem</strong></label>
                            <textarea class="form-control" id="txtInp" name="texto"></textarea>
                            <!-- Submit -->
                            <input type="button" class="btn btn-primary text-orange" id="subBtn" value="Enviar" name="submit" />
                        </form>
                        <p class="text-success dropdown-item" id="notification" hidden>Email Enviado! Obrigado pela mensagem!</p>
                    </div>
                </div>
            </div>
        </div>
    </nav>''
    <div id="carro" class="carousel slide" data-ride="carousel" data-interval="2500">
        <ol class="carousel-indicators " id="ind"></ol>
        <div class="carousel-inner bg-gray" id="imgHolder">
            <?php
            for ($i = 0; $i <= 10; $i++) {
                $imgDesc = "test";
                $imgEnd = "test";
                $imgNome = "test";
                $imgCnt = "data:image/png;base64, ";
                $divClass = (($i == 0) ? "active " : "");
                $indEle = '<li data-target="#carro" data-slide-to="' . $i . '" class="' . $divClass . '"></li>';
                $elemBody =
                    '<div class="carousel-item ' . $divClass . '">
                        <a href="/emp/' . $imgNome . '">
                            <img src="' . "dnt.png" . '" class="selectDisable d-block w-100 h-100 " align="middle">
                            <div class="carousel-caption d-none d-md-block bg-panel">
                                <h1 class="text-orange text-left">' . $imgNome . '</h1>
                                <h3 class="text-left">' . $imgDesc . '</h3>
                                <p class="text-left">' . $imgEnd . '</p>
                            </div>
                        </a>
                    </div>';
                echo ($elemBody);
            }
            ?>
        </div>
        <a class="carousel-control-prev" href="#carro" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" href="#carro" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carro" role="button" data-slide="next">
            <span class="carousel-control-next-icon" href="#carro" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="bg-gray">
        <h4 class="text-center h-10 text-black"> Copyright Donato Construtora @ 2021 </h4>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="index.js"></script>
</body>

</html>