@extends('layouts.app')

@section('project')
<section id='project' class="project-hero">
    <h1>{{{$datos->texto}}}</h1>
    <iframe src="{{{$datos->map}}}" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</section>
@endsection