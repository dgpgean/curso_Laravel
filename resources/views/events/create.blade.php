@extends('layouts.main')

@section('title','Criar Evento')

@section('content')
    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Crie o seu evento</h1>
        <form action="/events" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="foorm-group">
                <label for="Image">Imagem do evento:</label>
                <input type="file" id="image" name="image" class="form-control">
            </div>
            <div class="foorm-group">
                <label for="">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
            </div>
            <div class="foorm-group">
                <label for="date">Data do Evento:</label>
                <input type="date" class="form-control" id="date" name="date">
            </div>
            <div class="foorm-group">
                <label for="">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Nome da cidade">
            </div>
            <div class="foorm-group">
                <label for="">Descrição:</label>
                <textarea type="text" class="form-control" id="description" name="description" placeholder="Descrição"></textarea>
            </div>
            <div class="form-group">
                <label for="">O evento é privado?</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div><br>
            <input type="submit" value="Criar evento" class="btn btn-primary">
        </form>
    </div>

@endsection