@extends('layouts.app')

@section('card')
    @foreach ($comics as $comic)
    <img src="{{$comic['thumb']}}" alt="">
    <p>
        {{ $comic['series'] }}
    </p>
    @endforeach
@endsection