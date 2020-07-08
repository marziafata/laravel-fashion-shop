//in questo file clothes non vado a definire il layout (che è definito dentro app), ma i pezzi che lo compongono
// devo dirgli che questa view estende il layout e il file app all'interno della cartella layouts (il punto serve a mo di \)
@extends('layouts.app')

//definisco la section content
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Tutti i vestiti</h1>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>taglia</th>
                            <th>colore</th>
                            <th>nome</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vestiti as $vestito)
                            <tr>
                                <td>{{ $vestito->id }}</td>
                                <td>{{ $vestito->size }}</td>
                                <td>{{ $vestito->color }}</td>
                                <td>{{ $vestito->size }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
//creo la struttura della tabella (anche con bootstrap volendo) e con un for each compilo tutti i campi

//definisco la section per il page title
@section('page-title','Index Vestiti')

