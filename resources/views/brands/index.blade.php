@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb"><br>
            <div class="pull-left">
                <h2>Brands</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('brands.create') }}"> Create New Brand</a>
            </div>
        </div>
    </div><br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Description</th>
            <th>Status</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($brands as $brand)
        <tr>
            <td>{{ $brand->id }}</td>
            <td>{{ $brand->name }}</td>
            <td>{{ $brand->description }}</td>
            <td>{{ $brand->status }}</td>
            <td>
                <form action="{{ route('brands.destroy',$brand->id) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('brands.edit',$brand->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $brands->links() !!}   
@endsection