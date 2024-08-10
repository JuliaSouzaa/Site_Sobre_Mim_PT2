@extends('layouts.app')

@section('content')
    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/image1.jpg" class="d-block w-100" alt="...">
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>Seja Bem Vindo! Saiba Sobre Mim</h1>
                        <p class="opacity-75">Descubra mais sobre mim, minha família, cascas de bala e bichos de estimação.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/image2-1.jpg" class="d-block w-100" alt="...">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Família</h1>
                        <p>Conheça minha família e nossas histórias.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/image3.jpg" class="d-block w-100" alt="...">
                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>Cascas de Bala</h1>
                        <p>Pessoal que vive no meu pé.</p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Próximo</span>
        </button>
    </div>

    <div class="container marketing">
        <div class="row">
            <div class="col-lg-4">
                <img src="img/image4.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" alt="">
                <h2 class="fw-normal">Seja Bem Vindo!</h2>
                <p>Conheça mais sobre mim e minhas paixões.</p>
                <p><a class="btn btn-secondary" href="#">Ver detalhes &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <img src="img/image5.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" alt="">
                <h2 class="fw-normal">Família</h2>
                <p>Descubra a minha história familiar.</p>
                <p><a class="btn btn-secondary" href="#">Ver detalhes &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <img src="img/image6.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" alt="">
                <h2 class="fw-normal">Bichos de Estimação</h2>
                <p>Conheça os meus bichinhos de estimação.</p>
                <p><a class="btn btn-secondary" href="#">Ver detalhes &raquo;</a></p>
            </div>
        </div>
    </div>
@endsection
