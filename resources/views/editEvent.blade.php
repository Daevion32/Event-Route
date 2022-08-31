@extends('layouts.app')

@section('content')
<div class="card-body card_form">
  @if (session('status'))
  <div class="alert alert-success" role="alert">
    {{ session('status') }}
  </div>
  @endif
  <h2 class="card-title title_edit">Edit an event</h2>
  <form action="{{ route('updateEvent', $event->id)}}" method="post" class="card border-dark  form_all">
    @method('PATCH')
    @csrf
    <div class="mb-3">
      <label for="inputName" class="form-label">Nombre:</label>
      <input type="text" class="form-control" id="inputName" name="name" value="{{ $event->name }}">
    </div>
    <div class="mb-3">
      <label for="inputDate" class="form-label">Date:</label>
      <input type="date" class="form-control" id="inputDate" name="date" value="{{ $event->date }}">
    </div>
    <div class="mb-3">
      <label for="inputDescription" class="form-label">Descripción:</label>
      <input type="text" class="form-control" id="inputDescription" name="description" maxlength="250" value="{{ $event->description }}">
    </div>
    <div class="mb-3">
      <label for="inputSpaces" class="form-label">Capacidad:</label>
      <input type="text" class="form-control" id="inputSpaces" name="spaces" value="{{ $event->spaces }}">
    </div>
    <div class="mb-3">
      <label for="inputLocation" class="form-label">Ubicación:</label>
      <input type="text" class="form-control" id="inputLocation" name="location" value="{{ $event->location }}">
    </div>
    <div class="mb-3">
      <label for="inputImage" class="form-label">Imagen:</label>
      <input type="text" class="form-control" id="inputImage" name="image" value="{{ $event->image }}">
    </div>
    <div class="mb-3">
      <label for="inputGenre" class="form-label">Musical genre:</label>
      <input type="text" class="form-control" id="inputGenre" name="musical_genre" value="{{ $event->musical_genre }}">
    </div>
    <button type="submit" class="btn btn-primary" value="save">Guardar</button>
    <button type="back" class="btn btn-primary" href="{{ route('home') }}">Volver</button>


  </form>

</div>



</form>
@endsection