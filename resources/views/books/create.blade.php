@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add New Book</h2>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <div>
            <label>Title:</label>
            <input type="text" name="title" required>
        </div>

        <div>
            <label>Author:</label>
            <input type="text" name="author" required>
        </div>

        <div>
            <label>Published Year:</label>
            <input type="number" name="published_year" required>
        </div>

        <button type="submit">Add Book</button>
    </form>
</div>
@endsection