@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $book->title }}</h1>
    <p><strong>Author:</strong> {{ $book->author }}</p>
    <p><strong>Published Year:</strong> {{ $book->published_year }}</p>

    <a href="{{ route('books.index') }}" class="btn btn-secondary">⬅️ Back to list</a>
</div>
@endsection
