@extends('layouts.main')

@section('title','Login')

@section('content')

<form method="POST" action="/users">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nome</label>
      <input type="text" class="form-control">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" name="password" id="exampleInputPassword1">
    </div>

    <button type="submit" class="btn btn-primary">Entrar</button>
  </form>

@endsection