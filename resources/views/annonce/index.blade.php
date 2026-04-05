@extends('layout')

@section('content')

<a href="{{ route('annonce.create') }}" class="btn btn-primary mb-3">Ajouter</a>

<table class="table">
    <tr>
        <th>Photo</th>
        <th>Titre</th>
        <th>Description</th>
        <th>Type</th>
        <th>Ville</th>
        <th>Superficie</th>
        <th>Prix</th>
        <th>Action</th>
    </tr>

    @foreach($annonces as $a)
    <tr>
        <td>@if($a->photo)<img src="{{ asset('storage/'.$a->photo) }}" width="50">@endif</td>
        <td>{{ $a->titre }}</td>
        <td>{{ $a->description }}</td>
        <td>{{ $a->type }}</td>
        <td>{{ $a->ville }}</td>
        <td>{{ $a->superficie }}</td>
        <td>{{ $a->prix }}</td>

        <td>
            <a href="{{ route('annonce.show',$a->id) }}" class="btn btn-info">Afficher</a>
            <a href="{{ route('annonce.edit',$a->id) }}" class="btn btn-warning">Modifier</a>

            <form action="{{ route('annonce.destroy',$a->id) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button onclick="return confirm('Supprimer ?')" class="btn btn-danger">Supprimer</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection