@if ($sb = \Data::recommendation($reference) ?? null)
    <div class="berita-sidebar-container">
        @if (count($sb) !== 0)
            <h4>Side News</h4>
            <a href="{{ Src::detail($sb[1]) }}" aria-label="{{ $sb[1]['news_title'] ?? null }}">
                <article class="image-content mb-2">
                    @include('image', [
                        'source' => $sb[1],
                        'size' => '300x172',
                        $sb[1]['news_title'] ?? null,
                    ])
                </article>
                <span>{{ $sb[1]['news_title'] }}</span>
            </a>
            <div class="list-berita-sidebar mt-2">
                @for ($i = 1; $i < 3; $i++)
                    <a href="{{ Src::detail($sb[$i]) }}" aria-label="{{ $sb[$i]['news_title'] ?? null }}"
                        class="d-flex align-items-center gap-3">
                        <article class="image-content">
                            @include('image', [
                                'source' => $sb[$i],
                                'size' => '60x60',
                                $sb[$i]['news_title'] ?? null,
                            ])
                        </article>
                        <p>{{ $sb[$i]['news_title'] }}</p>
                    </a>
                @endfor
            </div>
    </div>
@endif
@endif
