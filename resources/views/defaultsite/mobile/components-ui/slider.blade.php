<div class="slider-container">
    <h4>Berita</h4>
    <div class="slider-content">
        @foreach ($hl as $s)
            <div class="slider-news">
                <a href="#">
                    <figure>
                        <div class="image-news">
                            @include('image', [
                                'source' => $s,
                                'size' => '212x115',
                                $s['news_title'] ?? null,
                            ])
                        </div>
                        <figcaption>{{ $s['news_title'] }}</figcaption>
                    </figure>
                </a>
            </div>
        @endforeach
    </div>
</div>
