@extends('books.layout')

@section('content')
            <h1>Showing Book {{ $book->title }}</h1>

    <div class="jumbotron text-center">
        <p>
            <strong>Book Title:</strong> {{ $book->title }}<br>
            <strong>Author:</strong> {{ $book->author }}
        </p>
    </div>
@endsection