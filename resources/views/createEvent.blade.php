@extends('layouts.app')

@section('content')

<form action="{{ route('storeEvent') }}" method="post">
  @csrf
  <div class="mb-3">
    <label for="inputName" class="form-label">Nombre:</label>
    <input type="text" class="form-control" id="inputName" name="name">
  </div>
  <div class="mb-3">
    <label for="inputDate" class="form-label">Date:</label>
    <input type="date" class="form-control" id="inputDate" name="date">
  </div>
  <div class="mb-3">
    <label for="inputDescription" class="form-label">Descripción:</label>
    <input type="text" class="form-control" id="inputDescription" name="description" maxlength="250">
  </div>
  <div class="mb-3">
    <label for="inputSpaces" class="form-label">Capacidad:</label>
    <input type="text" class="form-control" id="inputSpaces" name="spaces">
  </div>
  <div class="mb-3">
    <label for="inputLocation" class="form-label">Ubicación:</label>
    <input type="text" class="form-control" id="inputLocation" name="location">
  </div>
  <div class="mb-3">
    <label for="inputImage" class="form-label">Imagen:</label>
    <input type="text" class="form-control" id="inputImage" name="image">
  </div>
  <div class="mb-3">
    <label for="inputGenre" class="form-label">Musical genre:</label>
    <input type="text" class="form-control" id="inputGenre" name="musical_genre">
  </div>

  <button type="submit" class="btn btn-primary" value="create">Enviar</button>
  <button type="back" class="btn btn-primary" href="{{ route('home') }}">Volver</button>

</form>
@endsection