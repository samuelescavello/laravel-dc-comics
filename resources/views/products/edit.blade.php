@extends('layouts.app')
@section('content')
<div class="container">
    <form action="{{route('products.update', $product->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="thumb" class="form-label">thumb</label>
            <input type="text" class="form-control" id="thumb" name="thumb" value="{{$product->thumb}}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">price</label>
            <input type="text" class="form-control" id="price" name="price" value="{{$product->price}}" required>
            <div id="pricehelp" class="form-text">inserisci caratteri numerici</div>
        </div>
        <div class="mb-3">
            <label for="seriess" class="form-label">series</label>
            <input type="text" class="form-control" id="series" name="series" value="{{$product->series}}" >
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">type</label>
            <select class="form-control" id="type" name="type" value="{{$product->type}}">
                <option value="comic book" {{$product->type == 'comic book' ? 'selected' : ''}}>comic book</option>
                <option value="graphic novel" {{$product->type == 'graphic novel' ? 'selected' : ''}}>graphic novel</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">modifica</button>
        <button type="submit" class="btn btn-warning"><a
            href="{{route('products.index')}}">annulla</a></button>
    </form>
    
</div>


@endSection