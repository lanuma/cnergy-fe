<div id="{{ $r['news_id'] }}" class="video-news-container">
    <a href="{{ Src::category($r) }}">
        <p>{{ $r['category_name'] ?? (last($r['news_category'])['name'] ?? '') }}</p>
    </a>
    <span>{{ Util::date($r['news_date_publish'], 'ago') }}</span>
    <a href="{{ Src::detail($r) }}">
        <h4>{{ $r['news_title'] ?? null }}</h4>
    </a>
    <a href="{{ Src::detail($r) }}" class="item-img aspect-[16/9] rounded-lg"
        aria-label="{{ $r['news_title'] ?? 'untitled' }}">
        @include('image', [
            'source' => $r,
            'size' => '640x360',
            $r['news_title'] ?? null,
        ])
    </a>
</div>
