@extends('layouts.main')

@section('title','Pagina Inicial')

@section('content')
<div id="search-container">
    <h1>Busque por um evento</h1>
    <form action="" method="GET">
        <input type="text" id="search" name="search" class="form-control " placeholder="Procurar">
    </form>
</div>
<div class="all">
    @if ($search)
        <h3>Buscando por {{$search}}</h3>

    @endif
    @foreach ($events as $event)
    
        <div class="card" style="width: 18rem;">
            <img src="/img/events/{{$event->image}}" alt=""><hr>
            <p>Data: {{ date('d/m/Y', strtotime($event->date))}}</p>
            <div class="card-body">
            <h5 class="card-title">{{$event->title}}</h5>
            <p class="card-text">{{$event->description}}</p>
            <a href="#" class="card-link">privado: </a>
            @if($event->private)
                <p href="#" class="card-link">Sim</p>
            @else
                <p href="#" class="card-link">Não</p>
            @endif
            </div>
            <a href="/events/{{$event->id}}" class="btn btn-primary">Saiba Mais</a>
        </div>
        
    @endforeach
    @if(count($events)==0)
        <p>Não há eventos!</p>
    @endif

</div>

@endsection