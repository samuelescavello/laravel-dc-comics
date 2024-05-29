@extends('layouts.app')
@section('content')
<div class="container">
    <h1>crea un nuovo prodotto</h1>
    <!-- <div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div> -->
    <form action="{{route('products.store')}}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="thumb" class="form-label">thumb</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" placeholder="inserisci immagine">
            @error('thumb')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror    
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">price</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="inserisci prezzo">
            <div id="pricehelp" class="form-text">inserisci caratteri numerici</div>
            @error('price')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="seriess" class="form-label">series</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" placeholder="inserisci serie">
            @error('series')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
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