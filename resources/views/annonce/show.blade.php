@extends('layout')

@section('content')

<h2>{{ $annonce->titre }}</h2>
<p>{{ $annonce->description }}</p>
<p>{{ $annonce->ville }}</p>
<p>{{ $annonce->prix }}</p>

@if($annonce->photo)
<img src="{{ asset('storage/'.$annonce->photo) }}" width="200">
@endif

@endsection