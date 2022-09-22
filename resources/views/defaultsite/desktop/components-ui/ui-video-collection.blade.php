@if (count($video) > 0)
    <div class="video-collection-container">
        <div class="d-flex">
            <h4>Video </h4>
            <i class="fa-solid fa-circle-chevron-right ms-2"></i>
        </div>
        <div class="card-video-content mt-2">
            @foreach ($video as $r)
                <div class="card-video-news">
                    <a href="{{ Src::detail($r) }}" data-duration="{{ null }}"
                        aria-label="{{ $r['news_title'] ?? null }}" style="--bg-black-opacity: transparant;">
                        <i class="icon icon--play icon--big"></i>
                        @include('image', [
                            'source' => $r,
                            'force' => '145x82',
                            'size' => '145x82',
                            $r['news_title'] ?? null,
                        ])
                    </a>
                    <p><a href="{{ Src::detail($r) }}">{{ $r['news_title'] ?? null }}</a></p>
                </div>
            @endforeach
        </div>
    </div>
@endif
