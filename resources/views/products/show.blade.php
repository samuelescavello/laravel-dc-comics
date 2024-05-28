@extends('layouts.app')
@section('content')

<div class="card container p-3 mt-2" style="width: 18rem;">
    <img src="{{ $product->thumb }}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{ $product->series }}</h5>
        <p class="card-text">{{ $product->type}}</p>
        <p class="card-text">${{ $product->price}}</p>
    </div>
</div>


@endsection