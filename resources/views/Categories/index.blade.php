@extends('layouts.layout')

@section('content')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <h1>Categories</h1>
    <div id="search-results"></div>

    <div class="mb-3">
    <label for="search" class="form-label">Search Categories</label>
    <input type="text" name="search" id="search" class="form-control">
</div>


<script>
  $(document).ready(function () {
    $('#search').on('input', function () {
        var query = $(this).val();

        if (query.length >= 3) {
            $.ajax({
                url: "{{ route('categories.search') }}",
                method: 'GET',
                data: {
  query: query,
  _token: '{{ csrf_token() }}'
},
                success: function (data) {
                    $('#search-results').html(data);
                }
            });
        } else {
            $('#search-results').html('');
        }
    });
});

</script>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td>{{ $category->created_at->format('Y-m-d H:i:s') }}</td>
                    <td>{{ $category->updated_at->format('Y-m-d H:i:s') }}</td>
                    <td>
                        <a href="{{ route('categories.show', $category) }}" class="btn btn-sm btn-primary">View</a>
                        <a href="{{ route('categories.edit', $category) }}" class="btn btn-sm btn-success">Edit</a>
                        <form action="{{ route('categories.destroy', $category) }}" method="post" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
