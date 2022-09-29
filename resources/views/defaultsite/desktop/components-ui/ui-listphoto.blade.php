@if (count($rows)>0)
<div class="photo-pages-news-container">
    @foreach ($rows as $r)
    <div>
        <figure>
            <a href="{{ Src::detail($r) }}">
                <div class="foto-content">
                    @include('image', ['source'=>$r, 'size'=>'236x133', $r['news_title']??null])
                    <span class="data-overlay">
                      {{ count($r['photonews']??0) }}
                    </span>
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
@endif
