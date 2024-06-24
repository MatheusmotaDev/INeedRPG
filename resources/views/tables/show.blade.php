@extends('layouts.main')

@section('title', $table->title)

@section('content')

<div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="image-container" class="col-md-6">
            <img src="/img/tables/{{ $table->image }}" class="img-fluid" alt="{{ $table->title }}">
        </div>
        <div id="info-container" class="col-md-6">
            <h1>{{ $table->title }}</h1>
            <p class="table-type"> <ion-icon name="shield-half-outline"></ion-icon> {{ $table->type }} </p>
            <p class="table-participants"> <ion-icon name="people-outline"></ion-icon> X participantes</p>
            <p class="table-owner"> <ion-icon name="star-outline"></ion-icon> Dono do evento </p>
            <a href="" class="btn btn-primary" id="table-submit">Confirmar Presença</a>
        </div>
        <div class="col-md-12" id="description-container">
            <h3>Sobre a mesa:</h3>
            <p class="table-description">{{ $table->description }}</p>
        </div>
    </div>
</div>

@endsection
