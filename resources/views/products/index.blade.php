@extends('layouts.app')
@section('content')
<div class="row container">
    @foreach ($products as $product)
        <div class="col-6 col-md-3 col-lg-2">
            <div class="card" >
                <img src="{{ $product->thumb }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">{{$product->series}}</p>
                </div>
                <a href="{{route('products.show', $product->id)}}" class="btn btn-primary m-2">dettagli</a>
                <a href="{{route('products.edit', $product->id)}}" class="btn btn-warning m-2">modifica</a>
                <form action="{{route('products.destroy', $product->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger m-2" value="cancella">
                </form>
            </div>
        </div>
    @endforeach
</div>
@endsection