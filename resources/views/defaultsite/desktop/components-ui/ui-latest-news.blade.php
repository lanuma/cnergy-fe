<div class="berita-terkini-container">
    <h4>berita terkini</h4>
    <a href="#">
        <div class="image-content">
            @include('image', [
                'source' => $latest,
                'force' => '310x172',
                'size' => '310x172',
                $latest['news_title'] ?? null,
            ])
        </div>
        <span>{{ $latest[1]['news_title'] }}</span>
    </a>
    <div class="list-berita-terkini mt-2">
        @foreach ($latest as $item)
            <a href="#" class="d-flex align-items-center gap-3">
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
        @endforeach
    </div>
</div>