@if (count($photo) > 0)
    <div class="photo-collection-container">
        <h4>Foto <span>></span></h4>
        <div class="card-photo-content">
            @foreach ($photo as $r)
                <div class="card-photo-news">
                    <figure>
                        <a href="{{ Src::detail($r) }}"
                            data-duration="{{ count($r['photonews'] ?? []) != 0 ? count($r['photonews']) : $r['photonews_count'] ?? 0 }}"
                            aria-label="{{ $r['news_title'] ?? null }}">
                            @include('image', [
                                'source' => $r,
                                'size' => '145x82',
                                $r['news_title'] ?? null,
                            ])
                        </a>
                        <figcaption><a href="{{ Src::detail($r) }}">{{ $r['news_title'] ?? null }}</a></figcaption>
                    </figure>
                </div>
            @endforeach
        </div>
    </div>
@endif
