@if (count($rows) > 0)
    <div class="d-flex align-items-center justify-content-between">
        <p class="related-thumb my-3">LATEST VIDEO</p>
    </div>
    <div class="related-video-container">
        @foreach ($rows as $r)
            <div class="video-frame">
                <a href="{{ Src::detail($r) }}">
                    @include('image', [
                        'source' => $r,
                        'size' => '230x129',
                        $r['news_title'] ?? null,
                    ])
                    <p class="mt-3" href="{{ Src::detail($r) }}">{{ $r['news_title'] ?? null }}</p>
                </a>
            </div>
        @endforeach
    </div>
@endif
