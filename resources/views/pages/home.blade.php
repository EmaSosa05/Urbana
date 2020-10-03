@extends('layouts.app')
 
@section('home')
<section id="home" class="home-hero">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <img src="/images/Urbana_logo.png" class="carousel-img">
        <div class="carousel-inner">
            <div class="carousel-item active"> 
                <div class="carousel-block">
                    <img class="w-100" src="/images/Portada/1.jpg">
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-block">
                    <img class="w-100" src="/images/Portada/2.jpg">
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-block">
                    <img class="w-100" src="/images/Portada/3.jpg">
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
@endsection


@section('proyectos')
    <div class="row text-center no-gutters">
        <div class="col-sm text-center my-auto">
            <a class="card card-block d-flex" href="/categoria/Paisajismo" style="text-decoration:none !important">
                <div class="card-body align-items-center d-flex justify-content-center card-own img-paisa">
                    <div class="text-proyectos"> PAISAJISMO </div>
                </div>
            </a>
        </div>
        <div class="col-sm text-center my-auto">
            <a class="card card-block d-flex" href="/categoria/Construccion" style="text-decoration:none !important">
                <div class="card-body align-items-center d-flex justify-content-center card-own img-cons">
                    <div class="text-proyectos"> CONSTRUCCION </div>
                </div>
            </a>
        </div>
    </div>
@endsection