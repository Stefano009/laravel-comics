@extends('layouts.app')
@section('card')
    
    @foreach ($comics as $comic)
        <div class="card">
            <div class="img">
                <img src="{{$comic['thumb']}}" alt="">
            </div>
            <p>
                {{ $comic['series'] }}
            </p>
        </div>
    @endforeach
    
@endsection
@section('title')
    home
@endsection
@include('partials.header')
@include('partials.main')
@include('partials.footer')
