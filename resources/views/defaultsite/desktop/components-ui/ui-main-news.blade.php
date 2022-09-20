<div class="main-news-container">
    <figure>
        <a href="#">
            <img src={{ $hl[0]['news_image']['real'] }}>
        </a>
        {{-- <figcaption>{{ $hl[0]['news_date_publish'] }}</figcaption> --}}
        <figcaption> {{ Util::date($hl[0]['news_date_publish'], 'ago') }} </figcaption>
    </figure>
    <div class="main-news-deskripsi">
        <h3>{{ $hl[0]['news_title'] }}</h3>
        <p>{{ $hl[0]['news_synopsis'] }}</p>
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
                    <a href="#" class="slider-card">
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
                            <span class="slider-title">{{ $s['news_title'] }}</span>
                        </div>
                    </a>
                @endforeach
            </div>
        </section>

    </div>

</div>
