<div class="main-news-container">
    <figure>
        <a href="{{ Src::detail($hl[0]) }}" aria-label="{{ $hl[0]['news_title'] ?? null }}">
            <img src={{ $hl[0]['news_image']['real'] }}>
        </a>
        <figcaption> {{ Util::date($hl[0]['news_date_publish'], 'ago') }} </figcaption>
    </figure>
    <div class="main-news-deskripsi">
        <a href="{{ Src::detail($hl[0]) }}" aria-label="{{ $hl[0]['news_title'] ?? null }}">
            <h3>{{ $hl[0]['news_title'] }}</h3>
            <p>{{ $hl[0]['news_synopsis'] }}</p>
        </a>
    </div>
    <div class="mt-4">
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
                            {{-- <img src="{{ $s['news_image']['real'] }}" class="slider-thumb" alt=""> --}}
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
                                        <i class="fa-sharp fa-solid fa-circle-camera me-3" style="color: #CA0000"></i>
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

    </div>

</div>
