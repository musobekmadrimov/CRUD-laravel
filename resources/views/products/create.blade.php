@extends('products.layout');
@section('title')
    Create a new product
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12 margin-tb">
            <h2 class="display-6 text-center">Create a New Product</h2>
            <div class="pull-left">
                <a class="btn btn-danger" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger my-3">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <div class="row mt-3">
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="detail">Detail:</label>
                    <textarea class="form-control" id="detail" name="detail" placeholder="Detail" rows="1"></textarea>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary float-right">Submit</button>
            </div>
        </div>

    </form>
@endsection
