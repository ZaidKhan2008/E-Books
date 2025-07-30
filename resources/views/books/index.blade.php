@extends('layouts.app')

@section('content')
<div class="container">
    <h2>All Books</h2>

    <a href="{{ route('books.create') }}" style="margin-bottom: 10px; display: inline-block;">
        ➕ Add New Book
    </a>

    @if (session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    @if ($books->count() > 0)
        <table border="1" cellpadding="10">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Published Year</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->published_year }}</td>
                        <td>
                            <a href="{{ route('books.edit', $book->id) }}">✏️ Edit</a> |
                            <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure?')">🗑 Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No books found.</p>
    @endif
</div>
@endsection