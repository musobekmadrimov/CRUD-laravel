@extends('products.layout')
@section('title')
    Showing Product
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <h2 class="text-center display-4"> Show <span class="text-danger">{{$product->name}}</span></h2>
            <div class="pull-left my-3">
                <a class="btn btn-danger" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-sm-12">
            <table class="table table-bordered">
                <thead class="bg-dark text-light">
                    <th>Name:</th>
                    <th>Details:</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->detail }}</td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>
@endsection
