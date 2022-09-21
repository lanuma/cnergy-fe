<div class="gallery-image-container">
    <div class="parent">
        <div class="div1">
            @include('image', [
                'source' => $gl,
                'force' => '426x238',
                'size' => '426x238',
                $gl['news_title'] ?? null,
            ])
        </div>
        <div class="div2">
            @include('image', [
                'source' => $gl,
                'force' => '212x115',
                'size' => '212x115',
                $gl['news_title'] ?? null,
            ])
        </div>
        <div class="div3">
            @include('image', [
                'source' => $gl,
                'force' => '212x115',
                'size' => '212x115',
                $gl['news_title'] ?? null,
            ])
        </div>
    </div>

    <div class="gallery-image-row-2">
        <p>{{ $gl[1]['news_type'] }}</p>
        <span>{{ Util::date($gl[1]['news_date_publish'], 'ago') }}</span>
        <h4>{{ $gl[1]['news_title'] }}</h4>
    </div>
</div>
