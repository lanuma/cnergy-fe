<div class="mt-4">
    <h4 class="special-font-prompt text-uppercase fst-italic fw-bold" style="font-size: 16px; margin-left: 20px">
        Spotlight</h4>
    <section class="custom-slider">
        <button class="pre-btn"><img src="{{ URL::asset('assets/icons/prev.svg') }}" alt=""></button>
        <button class="nxt-btn"><img src="{{ URL::asset('assets/icons/next.svg') }}" alt=""></button>
        <div class="slider-container">
            @foreach ($sl as $s)
                <a href="{{ Src::detail($s) }}" aria-label="{{ $s['news_title'] ?? null }}" class="slider-card">
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
