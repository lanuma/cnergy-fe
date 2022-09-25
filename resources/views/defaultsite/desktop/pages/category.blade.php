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

                {{-- SEARCH INDEX --}}
                @include('defaultsite.desktop.components-ui.ui-search-index')

                <h4 class="special-font-lato fw-bold text-uppercase fs-6 fst-italic">index news</h4>

                {{-- @include('ui.components.list-main-news') --}}

                {{-- UI MAIN NEWS --}}
                @if ($headline)
                    <div class="main-news-container">
                        <figure>
                            <a href="{{ Src::detail($headline) }}" aria-label="{{ $headline['news_title'] ?? null }}">
                                <img src={{ $headline['news_image']['real'] }}>
                            </a>
                            <figcaption>{{ Util::date($headline['news_date_publish'], 'ago') }} </figcaption>
                        </figure>
                        <div class="main-news-deskripsi">
                            <a href="{{ Src::detail($headline) }}" aria-label="{{ $headline['news_title'] ?? null }}">
                                <h3><a href="{{ Src::detail($headline) }}">{{ $headline['news_title'] ?? null }}</a></h3>
                                <p>{{ $headline['news_synopsis'] }}</p>
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
                                    @if ($feed)
                                        @foreach ($feed as $s)
                                            <a href="{{ Src::detail($s) }}" aria-label="{{ $s['news_title'] ?? null }}"
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
                                                    @if ($s['news_type'] == 'photonews')
                                                        <i class="fa-sharp fa-solid fa-circle-camera"></i>
                                                    @endif
                                                    @if ($s['news_type'] == 'video')
                                                        <i class="fa-solid fa-circle-play"></i>
                                                    @endif
                                                    <div class="d-flex flex-column">
                                                        <p>
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
                @endif

                {{-- @dd($latest) --}}
                @include('defaultsite.desktop.components-ui.ui-list-main-news', [
                    'listnews' => $latest['data'],
                ])

                {{-- @dd($latest) --}}
                @include('defaultsite.desktop.components-ui.ui-pagination', $latest['attributes'])
            </div>

        </div>
    </div>
    </div>


@endsection
