@extends('layout.comics')

@section('content')

{{-- @dd($comics) --}}
@foreach ( $comics as  $comic)

<div class="comic-card">
    <img src="{{$comic->image}}" alt="">
    <p>{{$comic->title}}</p>
    <p>{{$comic->type}}</p>

</div>

@endforeach

@stop
