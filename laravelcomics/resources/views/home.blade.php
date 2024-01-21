@extends('layouts.base')

@section('titolo')
    Home
@endsection

@section('contenuto')
    <div class="p-container">
        @foreach ($fumetti as $fumetto)
            <div class="fumetto">
                <div class="immagine" style="background-image : url( {{ $fumetto['thumb'] }} )"></div>
                <p>{{ $fumetto['title'] }}</p>
            </div>
        @endforeach
    </div>
@endsection
