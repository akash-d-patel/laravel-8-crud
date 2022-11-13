@extends('layouts.default') 
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left"><br>
            <h2>Add New User</h2>
        </div>
    </div>
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif 
<form action="{{ route('users.store') }}" method="POST">
    @csrf
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name<span class="text-danger">*</span></strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email<span class="text-danger">*</span></strong>
                <input type="text" name="email" class="form-control" placeholder="email">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Password<span class="text-danger">*</span></strong>
                <input type="password" name="password" class="form-control" placeholder="password">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> Confirm Password<span class="text-danger">*</span></strong>
                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong for="status">Status</strong>
                <select class="form-control" id="status" name="status">
                <option>Active</option>
                <option>Inactive</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
        </div>
    </div>
</form>
@endsection