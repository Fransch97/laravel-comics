<header>
    <nav>
        <div class="logo">
            <img src="{{asset('../img/dc-logo.png')}}" alt="">
        </div>
        <ul>
            {{-- @dd($links) --}}
            @foreach ( $links as $link )

            <li class="">
                <a href="{{$link['href']}}">{{$link['text']}}</a>
            </li>
            @endforeach
        </ul>
      </nav>
</header>
