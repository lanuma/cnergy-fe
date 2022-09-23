@if ($latest = \Data::latest(limit: 5) ?? null)
    @if (count($latest) > 0)
        <div class="berita-terkini-container">
            <h4>berita terkini</h4>
            <a href="{{ Src::detail($latest[1]) }}" aria-label="{{ $latest[1]['news_title'] ?? null }}">
                <div class="image-content">
                    @include('image', [
                        'source' => $latest[1],
                        'force' => '300x172',
                        'size' => '300x172',
                        $latest[1]['news_title'] ?? null,
                    ])
                </div>
                <span>{{ $latest[1]['news_title'] }}</span>
            </a>
            <div class="list-berita-terkini mt-2">
                @foreach ($latest as $item)
                    @if ($loop->index >= 1)
                        <a href="{{ Src::detail($item) }}" aria-label="{{ $item['news_title'] ?? null }}"
                            class="d-flex align-items-center gap-3">
                            <div class="image-content">
                                @include('image', [
                                    'source' => $item,
                                    'force' => '60x60',
                                    'size' => '60x60',
                                    $item['news_title'] ?? null,
                                ])
                            </div>
                            <p>{{ $item['news_title'] }}</p>
                        </a>
                    @endif
                @endforeach
            </div>
        </div>
    @endif
@endif
