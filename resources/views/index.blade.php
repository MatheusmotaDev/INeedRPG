@extends('layouts.main')

@section('title', 'I need RPG')
        
@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque uma mesa</h1>
    <img src="banner.webp" alt="">
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>

<div id="tables-container" class="col-md-12">
    <h2>Próximas mesas</h2>
    <p class="subtitle">Veja as mesas de RPG disponíveis</p>
    <div id="cards-container" class="row">
        @foreach($tables as $table)
        <div class="card col-md-3">
            <img src="/img/tables/{{ $table->image }}" class="teste" alt="{{ $table->title }}">
            <div class="card-body">
                <p class="card-date">20-20-2000</p>
                <h5 class="card-title">{{ $table->title }}</h5>
                <p class="card-participants">X participantes</p>
                <a href="/tables/{{ $table->id }}" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
