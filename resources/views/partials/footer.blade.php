<footer>
    <div class="footer-links">
        <div class="links-container-footer">
            <div class="mini-container">
                {{-- @dd($footerLinks) --}}

                @foreach ($footerLinks as $linkList)

                <ul>
                    <li><a href="" class="title-li">{{$linkList['title']}}</a></li>
                    @foreach ($linkList['links'] as $link)
                        <li class="small-li">

                            <a href="{{$link['href']}}">{{$link['txt']}}</a>

                        </li>
                    @endforeach

                </ul>
                @endforeach
            </div>
        </div>
        <img id="biglogo" src="../img/dc-logo-bg.png" alt="">
    </div>
</footer>
