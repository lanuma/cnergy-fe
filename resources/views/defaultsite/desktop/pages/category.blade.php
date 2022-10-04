@extends('defaultsite.desktop.layouts.ui-main')

@section('title', 'Index Paging')

@section('content')


    <div class="mt-4">
        <div class="row gx-5">
            <div class="col-4">
                {{-- INDEX KANAL --}}
                @include('defaultsite.desktop.components-ui.ui-index-kanal')

            </div>
            <div class="col-8">
                {{-- UI MAIN NEWS --}}
                @if ($headline)
                    <div class="main-news-container">
                        <article>
                            <figure>
                                <a href="{{ Src::detail($headline) }}" aria-label="{{ $headline['news_title'] ?? null }}">
                                    <img src={{ $headline['news_image']['real'] }}>
                                </a>
                                <figcaption>{{ Util::date($headline['news_date_publish'], 'ago') }} </figcaption>
                            </figure>

                            <div class="main-news-deskripsi">
                                <a href="{{ Src::detail($headline) }}" aria-label="{{ $headline['news_title'] ?? null }}">
                                    <h3 class="text-dark">{{ $headline['news_title'] }}</h3>
                                </a>
                                <p>{{ $headline['news_synopsis'] }}</p>
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
                                        @if ($feed)
                                            @foreach ($feed as $s)
                                                <a href="{{ Src::detail($s) }}"
                                                    aria-label="{{ $s['news_title'] ?? null }}" class="slider-card">
                                                    <div class="slider-image">

                                                        @include('image', [
                                                            'source' => $s,
                                                            'size' => '212x115',
                                                            $s['news_title'] ?? null,
                                                        ])
                                                    </div>
                                                    <div class="slider-info">
                                                        <div class="d-flex flex-column">
                                                            @if ($s['news_type'] == 'photonews')
                                                                <i class="fa-sharp fa-solid fa-camera me-3"
                                                                    style="color: #CA0000"></i>
                                                            @endif
                                                            @if ($s['news_type'] == 'video')
                                                                <i class="fa-solid fa-circle-play me-3"
                                                                    style="color: #CA0000"></i>
                                                            @endif
                                                            <p class="time-info">
                                                                {{ Util::date($s['news_date_publish'], 'ago') }}
                                                            </p>
                                                            <span class="slider-title">{{ $s['news_title'] }}</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            @endforeach
                                        @endif
                                    </div>
                                </section>
                            </div>
                        </article>
                    </div>
                @endif




                {{-- @dump($latest['data']) --}}
                @include('defaultsite.desktop.components-ui.ui-list-main-news-conf', [
                    'rows' => $latest['data'],
                ])


                {{-- @include('defaultsite.desktop.components-ui.ui-list-main-news', [
                    'listnews' => $latest['data'],
                ]) --}}

                @include('defaultsite.desktop.components-ui.ui-pagination', $latest['attributes'])


            </div>
        </div>
    </div>


@endsection
