@extends('layouts.app')

@section('content')

    <h1>Hola mundo!</h1>


    @foreach($books as $book)

        <ul>
            <li>id: {{ $book->id}}</li>
            <li>Titulo: {{ $book->third->name}}</li>
            <li>descripcion: {{ $book->description}}</li>
            <li>Genero: {{ $book->bookgenre->genre->name}}</li>
            <li>Fecha de publicacion: {{ $book->published}}</li>
            <li>autor: {{ $book->bookauthor->authorname->third->name}}</li>
            <li>Editora: {{ $book->bookpublisher->third->name}}</li>
            <li>Usuario quien lo publica: {{ $book->bookowner->user->third->name}}</li>
            <li>Status: {{ $book->bookstatus->status->name}}</li>
            <li>Idioma: {{ $book->booklanguage->language->name }} ({{ $book->booklanguage->language->code }})</li>
            <li>Valoración: </li>
            <li>
                Comments:
                <ul>
                    <li>1</li>
                    <li>2</li>
                </ul>
            </li>
        </ul>

    @endforeach

@endsection