@extends('layouts.app')
@section('content')
<div class="row">
    
   
    @foreach ($products as $product)
    <div class="col-12 col-md-3 col-lg-2">
    <div class="card" style="width: 18rem;">
            <img src="{{ $product->thumb }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">{{$product->title}}</p>
            </div>
        </div>
    </div>
    @endforeach
    

</div>
@endsection