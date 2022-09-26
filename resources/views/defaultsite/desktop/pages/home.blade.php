@extends('defaultsite.desktop.layouts.ui-main')

{{-- @push('preload')
    @if ($headline[0]['news_id'] ?? null)
        <link rel="preload" as="image" href="{{ Src::imgNewsCdn($headline[0] ?? null, '640x360', 'webp') }}" />
    @endif
@endpush --}}

@section('content')
    <div class="mt-4">
        <div class="row gx-5">
            <div class="col-8">
                <div class="main-news-container">
                    <figure>
                        <a href="{{ Src::detail($headline[0]) }}" aria-label="{{ $headline[0]['news_title'] ?? null }}">
                            @include('image', [
                                'source' => $headline[0],
                                'force' => '640x360',
                                'size' => '640x360',
                                $headline[0]['news_title'] ?? null,
                            ])

                            @if ($headline[0]['news_type'] == 'photonews')
                                <span class="item-img-info">
                                    <i class="icon icon--photo icon--white mr-1"></i> Lihat Foto
                                </span>
                            @endif
                            @if ($headline[0]['news_type'] == 'video')
                                <span class="item-img-info">
                                    <i class="icon icon--video icon--white mr-1"></i> Putar Video
                                </span>
                            @endif
                        </a>
                        <figcaption> {{ Util::date($headline[0]['news_date_publish'], 'ago') }} </figcaption>
                    </figure>
                    <div class="main-news-deskripsi">
                        <a href="{{ Src::detail($headline[0]) }}" aria-label="{{ $headline[0]['news_title'] ?? null }}">
                            <h3>{{ $headline[0]['news_title'] }}</h3>
                            <p>{{ $headline[0]['news_synopsis'] }}</p>
                        </a>
                    </div>
                    <div class="mt-4">
                        <h4 class="special-font-prompt text-uppercase fst-italic fw-bold"
                            style="font-size: 16px; margin-left: 20px">
                            Berita
                            Utama Lainnya</h4>
                        <section class="custom-slider">
                            <button class="pre-btn"><img src="{{ URL::asset('assets/icons/prev.svg') }}"
                                    alt=""></button>
                            <button class="nxt-btn"><img src="{{ URL::asset('assets/icons/next.svg') }}"
                                    alt=""></button>
                            <div class="slider-container">
                                @foreach ($headline as $s)
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
                                                        <i class="fa-sharp fa-solid fa-circle-camera me-3"
                                                            style="color: #CA0000"></i>
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
                {{-- !! END OF HEADLINE !! --}}

                {{-- BERITA SPOTLIGHT --}}
                @if ($latest[0]['news_id'] ?? null)
                    @include('defaultsite.desktop.components-ui.ui-spotlight-news', ['sl' => $latest])
                @endif

                {{-- LIST MAIN NEWS --}}
                {{-- @if ($headline[0]['news_id'] ?? null)
                        @include('defaultsite.desktop.components-ui.ui-list-main-news', [
                            'listnews' => $headline,
                        ])
                    @endif --}}

                {{-- PROMOTION PRODUCT --}}
                @if ($headline[0]['news_id'] ?? null)
                    @include('defaultsite.desktop.components-ui.ui-promotion', ['pr' => $headline])
                @endif

                {{-- !! WHYYYY !! --}}
                @include('defaultsite.desktop.components-ui.ui-list-main-news-conf', [
                    'rows' => $latest,
                ])

            </div>
            <div class="col-4">
                @include('defaultsite.desktop.components-ui.ui-aside', ['reference' => $feed ?? null])
            </div>
        </div>
    </div>
@endsection
