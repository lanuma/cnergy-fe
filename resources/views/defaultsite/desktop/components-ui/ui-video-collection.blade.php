@if (count($video) > 0)
    <div class="video-collection-container">
        <a class="d-flex mb-2" href="/video">
            <h4>Video </h4>
            <i class="fa-solid fa-circle-chevron-right ms-2" style="color: #CA0000"></i>
        </a>
        <div class="card-video-content mt-2">
            @foreach ($video as $r)
                <div class="card-video-news">
                    <figure>
                        <a href="{{ Src::detail($r) }}" data-duration="{{ null }}"
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
@endif
