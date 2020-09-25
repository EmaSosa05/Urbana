@extends('layouts.app')
 
@section('content')
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-caption">
            <img src="/images/Urbana_logo.png" class="carousel-img">
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://images.clarin.com/2018/01/18/B15vQiRNG_720x0__1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://www.lanoticia1.com/sites/default/files/circ.jpeg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://www.infocanuelas.com/app/media/acercarte-canuelas.jpeg" alt="Third slide">
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
@endsection
@section('proyectos')
    <div class="container">
        <div class="row no-gutters">
            <div class="col">
                <img class= "justify-content-start" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRZkm8DtLiX8NaPythgUtjHJiziSePeOpLfRA&usqp=CAU">
            </div>
            <div class="col">
                <img class= "justify-content-end" src="https://img.interempresas.net/fotos/2244011.jpeg">
            </div>
        </div>
    </div>
@endsection