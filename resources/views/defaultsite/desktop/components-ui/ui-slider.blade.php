<div class="slider-wrapper py-4">
    <div class="slider-thumb">
        <h4>
            Berita
            Utama Lainnya</h4>
    </div>
    <section class="custom-slider">
        <button type="button" aria-label="prev-btn" class="pre-btn"><img width="40px" height="40px"
                src="{{ URL::asset('assets/icons/prev.svg') }}" alt=""></button>
        <button type="button" aria-label="next-btn" class="nxt-btn"><img width="40px" height="40px"
                src="{{ URL::asset('assets/icons/next.svg') }}" alt=""></button>
        <div class="slider-container">
            @foreach ($fd as $s)
                <a href="{{ Src::detail($s) }}" aria-label="{{ $s[0]['news_title'] ?? null }}" class="slider-card">
                    <article class="slider-image">
                        @include('image', [
                            'source' => $s,
                            'size' => '212x115',
                            $s['news_title'] ?? null,
                        ])
                    </article>
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
</div>
