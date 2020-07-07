//in questo file clothes non vado a definire il layout (che è definito dentro app), ma i pezzi che lo compongono
// devo dirgli che questa view estende il layout e il file app all'interno della cartella layouts (il punto serve a mo di \)
@extends('layouts.app')

//definisco la section content
@section('content')
    @foreach ($vestiti as $vestito)
        <p>{{ $vestito->name }}</p>
    @endforeach
@endsection

\\definisco la section per il page title
@section('page-title','Index Vestiti')

