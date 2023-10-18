@extends('layouts.layout')

@section('content')
    <h1>Category Details</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->description }}</td>
                <td>{{ $category->created_at->format('Y-m-d H:i:s') }}</td>
                <td>{{ $category->updated_at->format('Y-m-d H:i:s') }}</td>
            </tr>
        </tbody>
    </table>

    <a href="{{ route('categories.edit', $category) }}" class="btn btn-sm btn-success">Edit</a>
    <form action="{{ route('categories.destroy', $category) }}" method="post" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
    </form>
@endsection
