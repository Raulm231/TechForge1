<?php
$url = "http://localhost/droga/TechAcademy-2/api/banners.php";

$dadosApi = file_get_contents($url);

$dadosBanner = json_decode($dadosApi);

//print_r($dadosBanner);
?>

<div class="pghome">

    <br>

    <h2>RECOMENDAÇÕES EM DESTAQUE:</h2>

    <br>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2400">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <?php
            foreach ($dadosBanner as $dados) {
            ?>
                <div class="carousel-item active">
                    <a href="game/<?= $dados->id_game ?>">
                        <img src="<?= $dados->imagem ?>" class="d-block w-100" alt="<?= $dados->nome ?>">
                    </a>
                </div>
            <?php
            }
            ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <br>

    <h3>TODOS OS JOGOS:</h3>

    <br>

    <div class="card" style="width: 18rem;">
        <img src="imagens/repeido/cc-vertical.jpg" class="card-img-top" alt="..." height="250px">
        <div class="card-body">
            <p class="card-text">Crimson Curse</p>
        </div>
    </div>
<br>
<br>
</div>