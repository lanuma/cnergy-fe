<div class="populer-container">
    <h4>populer</h4>
    <div class="list-populer-container">
        <a href="{{ Src::detail($populer[1]) }}" aria-label="{{ $populer[1]['news_title'] ?? null }}">
            <div class="image-content">
                @include('image', [
                    'source' => $populer[1],
                    'force' => '310x172',
                    'size' => '310x172',
                    $populer[1]['news_title'] ?? null,
                ])
            </div>
        </a>
        <div class="list-berita-populer">
            @foreach ($populer as $item)
                <a href="{{ Src::detail($item) }}" aria-label="{{ $item['news_title'] ?? null }}" class="slider-card">
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
</div>
