@extends('layouts.app')

@section('category')
<section id='category' class="category-hero">
    <div class="content">
        <div class="row no-gutters">
                @if(count($posts) > 0)
                    @for ($i = 0; $i < count($posts['id']); $i++)
                    <div class="col-sm-4">
                        <img alt="picture" src="{{{$posts['file'][$i]}}}" class="image">
                        <div class="overlay">
                            <a href="{{{$posts['id'][$i]}}}" class="text">{{$posts['name'][$i]}}</a>
                        </div>
                    </div>    
                    @endfor
                @endif
        </div>
    </div>
</section>
@endsection