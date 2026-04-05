@extends('layout')

@section('content')

<form action="{{ route('annonce.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-2">
        <label>Titre</label>
        <input type="text" name="titre" placeholder="Titre" class="form-control">
    </div>

    <div class="mb-2">
        <label>Description</label>
        <textarea name="description" placeholder="Description" class="form-control"></textarea>
    </div>

    <div class="mb-2">
        <label>Type</label>
        <select name="type" class="form-control">
            <option value="">Sélectionner un type</option>
            <option value="Appartement">Appartement</option>
            <option value="Maison">Maison</option>
            <option value="Villa">Villa</option>
            <option value="Magasin">Magasin</option>
            <option value="Terrain">Terrain</option>
        </select>
    </div>

    <div class="mb-2">
        <label>Ville</label>
        <input type="text" name="ville" placeholder="Ville" class="form-control">
    </div>

    <div class="mb-2">
        <label>Superficie </label>
        <input type="number" name="superficie" placeholder="Superficie" class="form-control">
    </div>

    <div class="mb-2">
        <label>
            <input type="checkbox" name="neuf" value="1"> Neuf
        </label>
    </div>

    <div class="mb-2">
        <label>Prix</label>
        <input type="number" name="prix" placeholder="Prix" class="form-control">
    </div>

    <div class="mb-2">
        <label>Photo</label>
        <input type="file" name="photo" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">Ajouter</button>

</form>

@endsection