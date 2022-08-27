@extends('layouts.app')
<form action="{{route('storeEvent')}}" method="post">
  @csrf
  <div class="mb-3">
    <label for="inputName" class="form-label">Nombre:</label>
    <input type="text" class="form-control" id="inputName">
  </div>
  <div class="mb-3">
    <label for="inputDate" class="form-label">Date:</label>
    <input type="date" class="form-control" id="inputDate">
  </div>
  <div class="mb-3">
    <label for="inputDescription" class="form-label">Descripción:</label>
    <input type="text" class="form-control" id="inputDescription" maxlength="250">
  </div>
  <div class="mb-3">
    <label for="inputSpaces" class="form-label">Capacidad:</label>
    <input type="text" class="form-control" id="inputSpaces">
  </div>
  <div class="mb-3">
    <label for="inputLocation" class="form-label">Ubicación:</label>
    <input type="text" class="form-control" id="inputLocation">
  </div>
  <div class="mb-3">
    <label for="inputImage" class="form-label">Imagen:</label>
    <input type="text" class="form-control" id="inputImage">
  </div>

  <button type="submit" class="btn btn-primary" value="create">Enviar</button>
  <button type="back" class="btn btn-primary" href="{{route('home')}}">Volver</button>

</form>