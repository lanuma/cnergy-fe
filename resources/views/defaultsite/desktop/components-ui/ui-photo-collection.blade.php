@if (count($photo) > 0)
    <div class="photo-collection-container">
        <div class="d-flex mb-2">
            <h4>Foto </h4>
            <i class="fa-solid fa-circle-chevron-right ms-2"></i>
        </div>
        <div class="card-photo-content">
            @foreach ($photo as $r)
                <div class="card-photo-news">
                    <figure>
                        <a href="{{ Src::detail($r) }}" data-duration="{{ null }}"
                            data-duration="{{ count($r['photonews'] ?? []) != 0 ? count($r['photonews']) : $r['photonews_count'] ?? 0 }}"
                            aria-label="{{ $r['news_title'] ?? null }}">
                            @include('image', [
                                'source' => $r,
                                'force' => '145x82',
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
