@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Categories</h3>

        <a href="{{ route('categories.create') }}" class="btn btn-success mb-3">Create New Category</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Product Count</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->products_count }}</td>
                        <td>
                         <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>

                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Pagination -->
        {{ $categories->links() }}
    </div>
@endsection
