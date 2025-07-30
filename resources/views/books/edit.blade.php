@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Book</h2>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Title:</label>
            <input type="text" name="title" value="{{ $book->title }}" required>
        </div>

        <div>
            <label>Author:</label>
            <input type="text" name="author" value="{{ $book->author }}" required>
        </div>

        <div>
            <label>Published Year:</label>
            <input type="number" name="published_year" value="{{ $book->published_year }}" required>
        </div>

        <button type="submit">Update Book</button>
    </form>
</div>
@endsection