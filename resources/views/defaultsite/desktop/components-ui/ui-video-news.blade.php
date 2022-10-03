<div id="{{ $r['news_id'] }}" class="video-news-container">
    <div class="d-flex align-items-center gap-3">
        <p>
            <a href="{{ Src::category($r) }}">{{ $r['category_name'] ?? (last($r['news_category'])['name'] ?? '') }}</a>
        </p>
        <span>{{ Util::date($r['news_date_publish'], 'ago') }}</span>
    </div>
    <h4 class="my-3" href="{{ Src::detail($r) }}">
        <a href="{{ Src::detail($r) }}"">{{ $r['news_title'] ?? null }}</a>
    </h4>
    <div class="img-wrapper">
        <a href="{{ Src::detail($r) }}" aria-label="{{ $r['news_title'] ?? 'untitled' }}">
            @include('image', [
                'source' => $r,
                'size' => '640x360',
                $r['news_title'] ?? null,
            ])
        </a>
    </div>
</div>
