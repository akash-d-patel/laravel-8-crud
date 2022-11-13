@extends('layouts.default')  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left"><br>
                <h2>Edit Brand</h2>
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
    <form action="{{ route('brands.update',$brand->id) }}" method="POST">
        @csrf
        @method('PUT') 
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name<span class="text-danger">*</span></strong>
                    <input type="text" name="name" value="{{ $brand->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description<span class="text-danger">*</span></strong>
                    <textarea class="form-control" style="height:150px" name="description" placeholder="Description">{{ $brand->description }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong for="status">Status</strong>
                    <select class="form-control" id="status" name="status">
                    <option value="Active" @if($brand->status == 'Active') selected="selected" @endif>Active</option>
                    <option value="Inactive" @if($brand->status == 'Inactive') selected="selected" @endif>Inactive</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-left">
              <button type="submit" class="btn btn-primary">Submit</button>
              <a class="btn btn-primary" href="{{ route('brands.index') }}"> Back</a>
            </div>
        </div>
    </form>
@endsection