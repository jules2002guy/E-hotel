@extends('layout')
@section('content')
@section('content')
<h3>Ajouter un Hotel</h3>
<form action="{{route('hotels.store')}}" method="POST" 
    enctype="multipart/form-data">
@csrf
<div class="form-group">
    <label for="name">Nom: </label>
    <input type="text" class="form-control" name="nom">
</div>

<div class="form-group">
    <label for="email">Description1: </label>
    <input type="text" class="form-control" name="description1">
</div>

<div class="form-group">
    <label for="section">Caracteristiques: </label>
    <input type="text" class="form-control" name="caracteristique">
</div>
<div class="form-group">
    <label for="section">Lieu: </label>
    <input type="text" class="form-control" name="lieu">
</div>

<div class="form-group">
    <label for="image">Image: </label>
    <input type="file" class="form-control" name="image">
</div>
<div class="col-md-6">
    <div class="form-group form-group-textarea mb-md-0">
        <!-- Message input-->
        <textarea class="form-control" id="message" name="description2" placeholder="Votre description *" data-sb-validations="required"></textarea>
        <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
    </div>
</div>

<button type="submit" class="btn btn-primary">Ajouter</button>

</form>
@endsection('content')