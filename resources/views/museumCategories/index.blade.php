@extends('layouts.layout')

@section('title', 'Advance Card')


@section('content')

<div class="card">
<div class="card-header">
  <h4>
    Museums' categories list
  </h4>
</div>
<div class="card-datatable table-responsive my-2">
      <table class="invoice-list-table table">
        <thead>
          <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
        @foreach($categories as $item)
          <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->description}}</td>
            <td>
              <div class="row">
              <div class="col-auto">
        <a href="{{url('/category/' . $item->id . '/edit')}}" class="btn btn-warning">
                    Edit
        </a>
        </div>

        <div class="col-auto">

        <form method="POST" action="{{ url('/category' . '/' . $item->id)}}" style="">
        {{ method_field('DELETE')}}
        {{ csrf_field() }}
        <button type="submit" class="btn btn-danger" title="Delete category" onclick="retun confirm('Confirm delete?')">
                    Delete
        </button>
        </form>

        </div>
              </div>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>

</div>


@endsection
