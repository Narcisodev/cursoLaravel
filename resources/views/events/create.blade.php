@extends('layouts.main')

@section('title', 'criar evento')

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>crie o seu evento</h1>
        <form action="/events" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">image do evento:</label>
                <input type="file" id="image" name="image" class="form-control-file" >
            </div>
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="nome do evento">
        </div>
        <div class="form-group">
            <label for="title">cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="local do evento">
        </div>
        <div class="form-group">
            <label for="title">o evento é privado?</label>
            <select name="private" id="private" class="form-control">
                <option value="1">Sim</option>
                <option value="0">Não</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">descrição:</label>
            <textarea name="description" id="description" class="form-control" placeholder="o que vai acontecer no evento?"></textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Criar evento">
        </form>
    </div>
@endsection
