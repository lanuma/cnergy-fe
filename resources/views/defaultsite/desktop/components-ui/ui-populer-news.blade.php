@if ($popular = \Data::popular() ?? null)
    <div class="populer-container">
        @if (count($popular) > 0)
            <h4>populer</h4>
            <div class="list-populer-container">
                <a href="{{ Src::detail($popular[1]) }}" aria-label="{{ $popular[1]['news_title'] ?? null }}">
                    <article id="target class="image-content">
                        @include('image', [
                            'source' => $popular[1],
                            'force' => '300x172',
                            'size' => '300x172',
                            $popular[1]['news_title'] ?? null,
                        ])
                    </article>
                </a>
                <div class="list-berita-populer">
                    @foreach ($popular as $item)
                        <a href="{{ Src::detail($item) }}" aria-label="{{ $item['news_title'] ?? null }}"
                            class="slider-card">
                            <div>
                                <h1>{{ $loop->iteration }}</h1>
                            </div>
                            <div class="berita-populer-deskripsi">
                                <span>{{ $item['category_name'] }}</span>
                                <p>{{ $item['news_title'] }}</p>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
@endif
