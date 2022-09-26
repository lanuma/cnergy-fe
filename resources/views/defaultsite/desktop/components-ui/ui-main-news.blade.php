<div id="{{ $r['news_id'] }}" class="main-news-container">
    <figure class="d-flex">
        <a href="{{ Src::detail($r) }}" aria-label="{{ $r['news_title'] ?? 'untitled' }}">
            @include('image', [
                'source' => $r,
                'force' => '200x112',
                'size' => '200x112',
                $r['news_title'] ?? null,
            ])
            <figcaption>{{ Util::date($r['news_date_publish'], 'ago') }}</figcaption>
        </a>
    </figure>
    <div class="main-news-deskripsi">
        <a href="{{ Src::category($r) }}">{{ $r['category_name'] ?? (last($r['news_category'])['name'] ?? '') }}</a>
        <a href="{{ Src::detail($r) }}">
            <h3>{{ $r['news_title'] ?? null }}</h3>
        </a>
        <p> {{ $r['news_synopsis'] }}</p>
    </div>
    {{-- <div class="mt-4">
        <h4 class="special-font-prompt text-uppercase fst-italic fw-bold" style="font-size: 16px; margin-left: 20px">
            Berita
            Utama Lainnya</h4>
        <section class="custom-slider">
            <button class="pre-btn"><img src="{{ URL::asset('assets/icons/prev.svg') }}" alt=""></button>
            <button class="nxt-btn"><img src="{{ URL::asset('assets/icons/next.svg') }}" alt=""></button>
            <div class="slider-container">
                @foreach ($hl as $s)
                    <a href="{{ Src::detail($s) }}" aria-label="{{ $s[0]['news_title'] ?? null }}"
                        class="slider-card">
                        <div class="slider-image">

                            @include('image', [
                                'source' => $s,
                                'force' => '212x115',
                                'size' => '212x115',
                                $s['news_title'] ?? null,
                            ])
                        </div>
                        <div class="slider-info">
                            <div class="d-flex flex-column">
                                <div class="d-flex flex-row align-items-center">
                                    @if ($s['news_type'] == 'photonews')
                                        <i class="fa-sharp fa-solid fa-camera me-3" style="color: #CA0000"></i>
                                    @endif

                                    @if ($s['news_type'] == 'video')
                                        <i class="fa-solid fa-circle-play me-3" style="color: #CA0000"></i>
                                    @endif
                                    <p class="time-info">
                                        {{ Util::date($s['news_date_publish'], 'ago') }}
                                    </p>
                                </div>
                                <span class="slider-title">{{ $s['news_title'] }}</span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </section>

    </div> --}}

</div>
