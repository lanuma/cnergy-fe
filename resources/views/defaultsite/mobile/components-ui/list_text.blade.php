<div class="text-news-container">
<article id="{{$r['news_id']}}" class="articles articles--text">
    <figure class="my-5 d-flex ">
        <a href="{{ Src::detail($r) }}" aria-label="{{ $r['news_title'] ?? 'untitled' }}">
            @include('image', [
                'source' => $r,
                'force' => '85x85',
                'size' => '85x85',
                $r['news_title'] ?? null,
            ])
        </a>
        <figcaption class=" mx-2" >
            <div class="d-flex ">
                <a class="text-category" href="{{ Src::category($r) }}">{{ $r['category_name'] ?? (last($r['news_category'])['name'] ?? '') }}
                </a>
                <p class="ms-2 text-dates">{{ Util::date($r['news_date_publish'], 'ago') }}</p>
            </div>
            <div class="text-news-desc mt-2">
                <a class="text-title" href="{{ Src::detail($r) }}">{{ $r['news_title'] ?? null }}</a>
            </div>
        </figcaption>
    </figure>
</article>
</div>