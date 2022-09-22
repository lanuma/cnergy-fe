<div class="gallery-image-container">
    <div class="parent">
        <a href="{{ Src::detail($headline[0]) }}" data-duration="{{ count($headline[0]['photonews'] ?? 0) }}"
            aria-label="{{ $headline[0]['news_title'] ?? null }}">
            <div class="div1">
                @include('image', [
                    'source' => $gl[1],
                    'force' => '212x115',
                    'size' => '212x115',
                    $gl['news_title'] ?? null,
                ])
        </a>
    </div>
    <div class="div2">
        @include('image', [
            'source' => $gl[2],
            'force' => '212x115',
            'size' => '212x115',
            $gl['news_title'] ?? null,
        ])
    </div>
    <div class="div3">
        @include('image', [
            'source' => $gl[2],
            'force' => '212x115',
            'size' => '212x115',
            $gl['news_title'] ?? null,
        ])
    </div>
</div>

<div class="gallery-image-row-2">
    <a href="{{ Src::detail($headline[0]) }}" data-duration="{{ count($headline[0]['photonews'] ?? 0) }}"
        aria-label="{{ $headline[0]['news_title'] ?? null }}">
        <p>{{ $gl[1]['news_type'] }}</p>
        <span>{{ Util::date($gl[1]['news_date_publish'], 'ago') }}</span>
        <h4>{{ $gl[1]['news_title'] }}</h4>
    </a>
</div>
</div>
