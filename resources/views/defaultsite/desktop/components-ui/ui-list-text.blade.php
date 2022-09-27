<article id="target" class="text-news-container">
    <figure class="my-5">
        <div class="img-news-container">
            <a href="{{ Src::detail($r) }}" aria-label="{{ $r['news_title'] ?? 'untitled' }}">
                @include('image', [
                    'source' => $r,
                    'force' => '200x112',
                    'size' => '200x112',
                    $r['news_title'] ?? null,
                ])
            </a>
        </div>
        <figcaption>
            <div class="text-news-time">
                <a href="{{ Src::category($r) }}">{{ $r['category_name'] ?? (last($r['news_category'])['name'] ?? '') }}
                </a>
                <p class="ms-3">{{ Util::date($r['news_date_publish'], 'ago') }}</p>
            </div>
            <div class="text-news-desc mt-2">
                <a href="{{ Src::detail($r) }}">{{ $r['news_title'] ?? null }}</a>
                <p class="mt-2">{{ $r['news_synopsis'] }}</p>
            </div>
        </figcaption>
    </figure>
</article>
