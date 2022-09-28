<article id="{{$r['news_id']}}">
<div class="highlight-article-container ">
    <a href="{{ Src::detail($r) }}" aria-label="{{ $r['news_title']??'untitled' }}">
        <figure>
            <div class="image-news" style="border-radius: 8px">
                @include('image', [
                  'source' => $r,
                  'force' => '375x208',
                  'size' => '375x208',
                  $r['news_title'] ?? null,
              ])
            </div>
            <div class="banner">
                <p>{{$r['news_category'][0]['name']}}</p>
                <span>{{$r['news_last_update']}}
                </span>
            </div>
            <a style="color: black" href="{{ Src::detail($r) }}" > <h2 class="item-desc-highlight">{{ $r['news_title']??null }}</h2></a>
        </figure>
    </a>
</div>

</article>
