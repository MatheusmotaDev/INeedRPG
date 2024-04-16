@extends('layouts.main')

@section('title', $mesa->title)


@section('content')

<div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="image-container" class="col-md-6">
        <img src="/img/mesas/{{ $mesa->image }}" class="img-fluid" alt="{{ $mesa->title }}">
        </div>
        <div id="info-container" class="col-md-6">
        <h1>{{ $mesa->title }}</h1>
        <p class="mesa-type"> <ion-icon name="shield-half-outline"></ion-icon> {{ $mesa->type }} </p>
        <p class="mesas-participants"> <ion-icon name="people-outline"></ion-icon> X participantes</p>
        <p class="mesa-owner"> <ion-icon name="star-outline"></ion-icon> Dono do evento </p>
        <a href="" class="btn btn-primary" id="mesa-submit">Confirmar Presença</a>
        </div>
        <div class="col-md-12" id="description-container">
            <h3>Sobre a mesa:</h3>
            <p class="mesa description">{{ $mesa->description }} </p>

        </div>
    </div>
</div>

@endsection