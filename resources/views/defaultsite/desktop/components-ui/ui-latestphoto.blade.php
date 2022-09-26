@if ($latest = collect($latest)->slice(0, 6))
<div class="photo-terkini-container">
    <h2>FOTO TERKINI</h2>
    <div class="latest-photo-container">
        @foreach ($latest as $r)
        <div>
            <figure>
                <a href="{{ Src::detail($r) }}">
                    <div class="foto-content">
                      @include('image', ['source'=>$r, 'size'=>'200x112', 'force'=>'200x112', $r['news_title']??null])
                    </div>
                </a>
                <figcaption>
                    <p><a href="{{ Src::detail($r) }}">{{$r['news_title']??null}}</a>
                    </p>
                </figcaption>
            </figure>
        </div>
        @endforeach
    </div>
</div>
@endif
