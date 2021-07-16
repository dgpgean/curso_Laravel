@extends('layouts.main')

@section('title',$event->title)

@section('content')

<div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="info-container" class="row-md-6">
            <h1>{{$event->title}}</h1>
            <p>Local: {{$event->city}}</p>
            <p>participates: x </p>
            <p>Dono do evento: x </p>
            <a href="" class="btn btn-primary">Confirmar presença</a>
            <div class="col-md-12" id="description-container">
                <h3>sobre o evento</h3>
                <p class="event">{{$event->description}}</p>
            </div>
        </div>
    </div>
</div>

@endsection