<div class="berita-sidebar-container">
    <h4>berita sidebar</h4>
    <a href="#">
        <div class="image-content">
            @include('image', [
                'source' => $sb,
                'force' => '310x172',
                'size' => '310x172',
                $sb['news_title'] ?? null,
            ])
        </div>
        <span>{{ $sb[1]['news_title'] }}</span>
    </a>
    <div class="list-berita-sidebar mt-2">
        @for ($i = 1; $i < 3; $i++)
            <a href="#" class="d-flex align-items-center gap-3">
                <div class="image-content">
                    @include('image', [
                        'source' => $sb,
                        'force' => '60x60',
                        'size' => '60x60',
                        $sb['news_title'] ?? null,
                    ])
                </div>
                <p>{{ $sb[$i]['news_title'] }}</p>
            </a>
        @endfor
    </div>
</div>
