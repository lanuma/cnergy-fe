@extends('defaultsite.desktop.layouts.ui-main')

{{-- @push('preload')
    @if ($headline[0]['news_id'] ?? null)
        <link rel="preload" as="image" href="{{ Src::imgNewsCdn($headline[0] ?? null, '640x360', 'webp') }}" />
    @endif
@endpush --}}

@section('content')
    <header>
        @include('ui.components.navbar')
        @include('ui.components.breaking-news')
    </header>

    <div class="mt-4">
        <div class="row gx-5">
            <div class="col-8">


                {{-- HEADLINE --}}
                {{-- @dump($headline) --}}
                @if ($headline[0]['news_id'] ?? null)
                    @include('defaultsite.desktop.components-ui.ui-main-news', ['hl' => $headline])
                @endif

                {{-- BERITA SPOTLIGHT --}}
                <div class="mt-4">
                    <h4 class="special-font-prompt text-uppercase fst-italic fw-bold"
                        style="font-size: 16px; margin-left: 20px">spotlight</h4>
                    @include('ui.components.slider-news')
                </div>

                {{-- LIST MAIN NEWS --}}
                @include('ui.components.list-main-news')


                {{-- GALLERY BERITA --}}
                {{-- @dump($headline[0]['news_type']) --}}
                @if ($headline[5]['news_type'] == 'news' ?? null)
                    @include('defaultsite.desktop.components-ui.ui-gallery-news', [
                        'gl' => $headline,
                    ]),
                @endif

                {{-- PROMOTION PRODUCT --}}
                @include('ui.components.promotion-product')


                {{-- VIDEO NEWS --}}
                {{-- @dump($feed) --}}
                @if ($feed[1]['news_id'] ?? null)
                    @include('defaultsite.desktop.components-ui.ui-video-news', ['r' => $feed])
                @endif

                {{-- LIST MAIN NEWS REPEAT --}}
                @if ($headline[3]['news_id'] ?? null)
                    @include('defaultsite.desktop.components-ui.ui-list-main-news', ['nw' => $headline])
                @endif

            </div>
            <div class="col-4">

                {{-- TRENDING TAG --}}
                @include('defaultsite.desktop.components-ui.ui-trending-tag')

                {{-- LIVE STREAMING --}}
                @include('ui.components.live-streaming')

                {{-- BERITA SIDEBAR --}}
                @if ($feed[2]['news_id'] ?? null)
                    @include('defaultsite.desktop.components-ui.ui-sidebar-news', ['sb' => $feed])
                @endif

                {{-- BERITA POPULER --}}
                @include('ui.components.populer-news')

            </div>
        </div>
    </div>
@endsection
