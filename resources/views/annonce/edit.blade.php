@extends('layout')

@section('content')

<form action="{{ route('annonce.update',$annonce->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-2">
        <label>Titre</label>
        <input type="text" name="titre" value="{{ $annonce->titre }}" class="form-control">
    </div>

    <div class="mb-2">
        <label>Description</label>
        <textarea name="description" class="form-control">{{ $annonce->description }}</textarea>
    </div>

    <div class="mb-2">
        <label>Type</label>
        <select name="type" class="form-control">
            <option value="Appartement" @selected($annonce->type === 'Appartement')>Appartement</option>
            <option value="Maison" @selected($annonce->type === 'Maison')>Maison</option>
            <option value="Villa" @selected($annonce->type === 'Villa')>Villa</option>
            <option value="Magasin" @selected($annonce->type === 'Magasin')>Magasin</option>
            <option value="Terrain" @selected($annonce->type === 'Terrain')>Terrain</option>
        </select>
    </div>

    <div class="mb-2">
        <label>Ville</label>
        <input type="text" name="ville" value="{{ $annonce->ville }}" class="form-control">
    </div>

    <div class="mb-2">
        <label>Superficie (m²)</label>
        <input type="number" name="superficie" value="{{ $annonce->superficie }}" class="form-control">
    </div>

    <div class="mb-2">
        <label>
            <input type="checkbox" name="neuf" value="1" @checked($annonce->neuf)> Neuf
        </label>
    </div>

    <div class="mb-2">
        <label>Prix</label>
        <input type="number" name="prix" value="{{ $annonce->prix }}" class="form-control">
    </div>

    <div class="mb-2">
        <label>Photo</label>
        <input type="file" name="photo" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Modifier</button>

</form>

@endsection