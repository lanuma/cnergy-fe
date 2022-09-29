@if (count($rows) > 0)
    <div class="video-action">
        <h2>VIDEO TERBARU</h2>
        <h4>Lihat Semua <a href="#"> > </a></h4>
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
