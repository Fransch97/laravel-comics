@extends('layout.comics')

@section('content')

{{-- @dd($comics) --}}

<div class="content">
    @foreach ( $comics as  $comic)
    <div class="comic-card">
        <div class="img">
            <img src="{{$comic->image}}" alt="">
        </div>
        <span class="txt">{{$comic->title}}</span>
      </div>
      @endforeach
</div>
<span id="loadmore">load more</span>

<div class="merchandise">
    <ul>
        {{-- @dump($merchandises) --}}
        @foreach ( $merchandises as $merchandise )

            <li>
                <img  src="{{$merchandise['srcImg']}}" alt="">
                <a href="{{$merchandise['href']}}">{{$merchandise['text']}}</a>
            </li>

        @endforeach
    </ul>
</div>


@stop
