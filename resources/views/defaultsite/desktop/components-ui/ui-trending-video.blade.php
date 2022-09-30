@if (count($popular) > 0)
    <div class="trending-video-action">
        <h2>TRENDING</h2>
        <h4>Lihat Semua <a href="#"> > </a></h4>
    </div>
    @foreach ($popular as $r)
        <article class="video-trending-container">
            <figure class="my-5">
                <div class="trending-video">
                    <a href="{{ Src::detail($r) }}" data-duration="{{ null }}"
                        aria-label="{{ $r['news_title'] ?? null }}">
                        @include('image', ['source' => $r, 'size' => '145x82', $r['news_title'] ?? null])
                    </a>
                </div>
                <figcaption class="mx-3">
                    <div class="video-trending-tag">
                        <a href="{{ Src::detail($r) }}"
                            class="item-desc-tag video-trending-10 font-bold">{{ $r['category_name'] ?? null }}</a>
                    </div>
                    <div class="video-trending-desc mt-2">
                        <a href="{{ Src::detail($r) }}">{{ $r['news_title'] ?? null }}</a>
                    </div>
                </figcaption>
            </figure>
        </article>
    @endforeach
@endif
