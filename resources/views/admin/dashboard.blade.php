@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">📚 Welcome Admin!</h1>
    <p class="text-gray-600">You're logged in as an Admin.</p>

    <div class="mt-6">
        <a href="{{ route('books.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
            ➕ Add New Book
        </a>
    </div>
</div>
@endsection