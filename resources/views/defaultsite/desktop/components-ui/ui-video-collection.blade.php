@if (count($video) > 0)
    <div class="video-collection-container">
        <h4>Video <span>></span></h4>
        <div class="card-video-content">
            @foreach ($video as $r)
                <div class="card-video-news">
                    <a href="{{ Src::detail($r) }}" data-duration="{{ null }}"
                        aria-label="{{ $r['news_title'] ?? null }}" style="--bg-black-opacity: transparant;">
                        <i class="icon icon--play icon--big"></i>
                        @include('image', ['source' => $r, 'size' => '145x82', $r['news_title'] ?? null])
                    </a>
                    <p><a href="{{ Src::detail($r) }}">{{ $r['news_title'] ?? null }}</a></p>
                </div>
            @endforeach
        </div>
    </div>
@endif
