<article class="text-news-container">
    <figure class="my-5">
        <div class="img-wrapper">
            <a href="{{ Src::detail($r) }}" aria-label="{{ $r['news_title'] ?? 'untitled' }}">
                @include('image', [
                    'source' => $r,
                    'size' => '200x112',
                    $r['news_title'] ?? null,
                ])
            </a>
        </div>

        <figcaption class="mx-4">
            <div class="text-news-time">
                <a href="{{ Src::category($r) }}">{{ $r['category_name'] ?? (last($r['news_category'])['name'] ?? '') }}
                </a>
                <span class="ms-3">{{ Util::date($r['news_date_publish'], 'ago') }}</span>
            </div>
            <div class="text-news-desc my-2">
                <p>
                    <a href="{{ Src::detail($r) }}">{{ $r['news_title'] ?? null }}</a>
                </p>
                <span class="mt-2">{{ $r['news_synopsis'] }}</span>
            </div>
        </figcaption>
    </figure>
</article>
