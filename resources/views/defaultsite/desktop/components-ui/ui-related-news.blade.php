@if (count($latest) > 0)
    @if ($latest = collect($latest)->slice(0, 18))
        <h2 class="related-thumb">Related News</h2>
        <div class="related-news-container">
            @foreach ($latest as $r)
                <div class="img-news">
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
@endif
