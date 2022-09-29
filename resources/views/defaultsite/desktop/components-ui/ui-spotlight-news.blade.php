<div class="mt-4">
    <h4 class="special-font-prompt text-uppercase fst-italic fw-bold" style="font-size: 16px; margin-left: 20px">
        Spotlight</h4>
    <section class="custom-slider">
        <button class="pre-btn"><img src="{{ URL::asset('assets/icons/prev.svg') }}" alt=""></button>
        <button class="nxt-btn"><img src="{{ URL::asset('assets/icons/next.svg') }}" alt=""></button>
        <div class="slider-container">
            @foreach ($sl as $s)
                <a href="{{ Src::detail($s) }}" aria-label="{{ $s['news_title'] ?? null }}" class="slider-card">
                    <article id="target" class="slider-image">
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
