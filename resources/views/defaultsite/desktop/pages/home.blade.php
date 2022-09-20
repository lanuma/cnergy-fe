@extends('defaultsite.desktop.layouts.ui-main')

{{-- @push('preload')
    @if ($headline[0]['news_id'] ?? null)
        <link rel="preload" as="image" href="{{ Src::imgNewsCdn($headline[0] ?? null, '640x360', 'webp') }}" />
    @endif
@endpush --}}

@section('content')
    <header>
        @include('defaultsite.desktop.components-ui.ui-header')


        {{-- @include('ui.components.navbar') --}}
        @if ($headline[0]['news_id'] ?? null)
            @include('defaultsite.desktop.components-ui.ui-breaking-news', ['bn' => $headline])
        @endif
    </header>

    <div class="mt-4">
        <div class="row gx-5">
            <div class="col-8">


                {{-- HEADLINE --}}
                @if ($headline[0]['news_id'] ?? null)
                    @include('defaultsite.desktop.components-ui.ui-main-news', ['hl' => $headline])
                @endif

                {{-- BERITA SPOTLIGHT --}}
                @if ($latest[0]['news_id'] ?? null)
                    @include('defaultsite.desktop.components-ui.ui-spotlight-news', ['sl' => $latest])
                @endif

                {{-- LIST MAIN NEWS --}}
                @if ($headline[0]['news_id'] ?? null)
                    @include('defaultsite.desktop.components-ui.ui-list-main-news', ['listnews' => $headline])
                @endif

                {{-- GALLERY BERITA --}}
                @if ($headline[0]['news_type'] == 'news' ?? null)
                    @include('defaultsite.desktop.components-ui.ui-gallery-news', [
                        'gl' => $headline,
                    ]),
                @endif

                {{-- PROMOTION PRODUCT --}}
                @if ($headline[0]['news_id'] ?? null)
                    @include('defaultsite.desktop.components-ui.ui-promotion', ['pr' => $headline])
                @endif

                {{-- VIDEO NEWS --}}
                {{-- @dump($feed) --}}
                @if ($feed[1]['news_id'] ?? null)
                    @include('defaultsite.desktop.components-ui.ui-video-news', ['r' => $feed])
                @endif

            </div>
            <div class="col-4">

                {{-- TRENDING TAG --}}
                @include('defaultsite.desktop.components-ui.ui-trending-tag')

                {{-- BERITA SIDEBAR --}}
                @if ($feed[1]['news_id'] ?? null)
                    @include('defaultsite.desktop.components-ui.ui-sidebar-news', ['sb' => $feed])
                @endif

                {{-- BERITA POPULER --}}
                @if ($feed[1]['news_id'] ?? null)
                    @include('defaultsite.desktop.components-ui.ui-populer-news', ['populer' => $feed])
                @endif

                {{-- BERITA TERKINI --}}
                @if ($feed[1]['news_id'] ?? null)
                    @include('defaultsite.desktop.components-ui.ui-latest-news', ['latest' => $feed])
                @endif
            </div>
        </div>
    </div>

    <footer>
        @include('ui.components.footer')
    </footer>
@endsection
