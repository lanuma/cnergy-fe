@if (count($photo) > 0)
    <div class="photo-collection-container">
        <a class="d-flex mb-2" href="/photo">
            <h4>Photo</h4>
            <i class="fa-solid fa-circle-chevron-right ms-2" style="color: #CA0000"></i>
        </a>
        <div class="img-wrapper">
            <div class="card-photo-content mt-2">
                @foreach ($photo as $r)
                    <div class="card-photo-news">
                        <figure>
                            <a href="{{ Src::detail($r) }}" data-duration="{{ null }}"
                                data-duration="{{ count($r['photonews'] ?? []) != 0 ? count($r['photonews']) : $r['photonews_count'] ?? 0 }}"
                                aria-label="{{ $r['news_title'] ?? null }}">
                                @include('image', [
                                    'source' => $r,
                                    'size' => '145x82',
                                    $r['news_title'] ?? null,
                                ])
                            </a>
                            <p>
                                <a href="{{ Src::detail($r) }}">{{ $r['news_title'] ?? null }}</a>
                            </p>
                        </figure>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif
