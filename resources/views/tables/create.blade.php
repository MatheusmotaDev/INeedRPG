@extends('layouts.main')

@section('title', 'Criar mesas')
        
@section('content')

<div id="event-create-container" class="col-md6 offset-md-3">
    <h1>Crie sua mesa</h1>
    <form action="/tables" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Imagem da mesa:</label>
            <input type="file" id="image" name="image" class="form-control-file">
        </div>
        <div class="form-group">
            <label for="title">Nome da mesa:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome da mesa">
        </div>
        <div class="form-group">
            <label for="title">Descrição:</label>
            <textarea name="description" id="description" class="form-control" placeholder="Descreva sua mesa"></textarea>
        </div>
        <div class="form-group">
            <label for="title">Tipo da mesa:</label>
            <input type="text" class="form-control" id="type" name="type" placeholder="Tipo da mesa">
        </div>
        <div class="form-group">
            <label for="title">A mesa pode ter iniciantes?</label>
            <select name="beginner" id="beginner" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <input type="submit" class="btn btn-primary" value="Criar mesa">
    </form>
</div>



@endsection