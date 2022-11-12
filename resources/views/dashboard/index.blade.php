@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1 style="text-align:center">Dashboard</h1>
                <div>
                    <button type="reset" onclick="window.location.href='{{ route('brands.index') }}'" class="btn btn-light-primary">Brands</button>
                </div><br>
                <div>
                    <button type="reset" onclick="window.location.href='{{ route('products.index') }}'" class="btn btn-light-primary">Products</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
