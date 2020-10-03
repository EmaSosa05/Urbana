@extends('layouts.app')

@section('project')
<section id='project' class="project-hero">
    <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel" style="text-align:center;">
        <div class="carousel-inner" role="listbox">
            @if(count($imgs) > 0)
                <div class="carousel-item active">
                    <div class="background-blur" style="background:url('{{{$imgs['file'][0]}}}')"></div>
                    <img src="{{{$imgs['file'][0]}}}" style="max-height: 100%;width:auto">
                </div>
                @for ($i = 1; $i < count($imgs['file']); $i++)
                    <div class="carousel-item">
                        <div class="background-blur" style="background-image:url('{{{$imgs['file'][$i]}}}')"></div>
                        <img src="{{{$imgs['file'][$i]}}}" style="max-height: 100%;width:auto">
                    </div>
                @endfor
            @endif
        </div>

        <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev" style="height: 60vw;">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next" style="height: 60vw;">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a> 
        <div class="centered">
            <ol class="carousel-indicators">
                @if(count($imgs) > 0)
                    <li data-target="#carousel-thumb" data-slide-to="0" class="active">
                        <img width="100" src="{{{$imgs['file'][0]}}}">
                    </li>
                    @for ($j = 1; $j < count($imgs['file']); $j++)
                    <li data-target="#carousel-thumb" data-slide-to="{{{$j}}}">
                        <img width="100" src="{{{$imgs['file'][$j]}}}">
                    </li>
                    @endfor
                @endif
            </ol>
        </div>
    </div>
    
    <div class="row no-gutters">
        <div class="col-sm">
            <div class="col-content">
                <h1>{{{$datos->titulo}}}</h1>
                <br><p>{{{$datos->texto}}}</p>
            </div>
        </div>
        <div class="col-sm" style="text-align:center;">
            <iframe src="{{{$datos->map}}}" width="100%" height="100%" frameborder="0" style="border:0;min-height:300px;" aria-hidden="false" tabindex="0" ></iframe>
        </div>
    </div>
</section>
@endsection