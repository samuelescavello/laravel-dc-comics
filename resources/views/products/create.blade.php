@extends('layouts.app')
@section('content')
<div class="container">
    <form action="{{route('products.store')}}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="thumb" class="form-label">thumb</label>
            <input type="text" class="form-control" id="thumb" name="thumb" placeholder="inserisci immagine">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">price</label>
            <input type="text" class="form-control" id="price" name="price" required placeholder="inserisci prezzo">
            <div id="pricehelp" class="form-text">inserisci caratteri numerici</div>
        </div>
        <div class="mb-3">
            <label for="seriess" class="form-label">series</label>
            <input type="text" class="form-control" id="series" name="series" placeholder="inserisci serie">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">type</label>
            <select class="form-control" id="type" name="type">
                <option value="comic book">comic book</option>
                <option value="graphic novel">graphic novel</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">crea</button>
        <button type="submit" class="btn btn-warning"><a
            href="{{route('products.index')}}">annulla</a></button>
    </form>
    
</div>


@endSection