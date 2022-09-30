<div id="{{ $r['news_id'] }}" class="main-news-container">
    <figure class="d-flex">
        <a href="{{ Src::detail($r) }}" aria-label="{{ $r['news_title'] ?? 'untitled' }}">
            @include('image', [
                'source' => $r,
                'size' => '200x112',
                $r['news_title'] ?? null,
            ])
            <figcaption>{{ Util::date($r['news_date_publish'], 'ago') }}</figcaption>
        </a>
    </figure>
    <div class="main-news-deskripsi">
        <a href="{{ Src::category($r) }}">{{ $r['category_name'] ?? (last($r['news_category'])['name'] ?? '') }}</a>
        <a href="{{ Src::detail($r) }}">
            <h3>{{ $r['news_title'] ?? null }}</h3>
        </a>
        <p> {{ $r['news_synopsis'] }}</p>
    </div>
</div>
