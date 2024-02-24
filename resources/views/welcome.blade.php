@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<div id="search-container" class="coll-md-12">
    <h1>busque um evento</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="procurar...">
    </form>
</div>
<div id="events-container" class="col-md-12">
    <h2>Proximos eventos</h2>
    <p class="subtitle">veja os eventos dos proximos dias</p>
    <div id="cards-container" class="row">
        @foreach ($events as $event)
        <div class="card col-md-3">
            <img src="/img/event_placeholder.jpg" alt="{{$event->title}}">
            <div class="card-body">
                <p class="card-date">dia tal</p>
                <h5 class="card-title">{{$event->title}}</h5>
                <p class="card-participants">x participantes</p>
                <a href="" class="btn btn-primary"> saber mais</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
