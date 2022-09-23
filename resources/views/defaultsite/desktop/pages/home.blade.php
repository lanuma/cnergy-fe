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


                {{-- HEADLINE --}}
                {{-- @dump($headline) --}}
                @if ($headline[0]['news_id'] ?? null)
                    @include('defaultsite.desktop.components-ui.ui-main-news', ['hl' => $headline])
                @endif

                {{-- BERITA SPOTLIGHT --}}
                @if ($latest[0]['news_id'] ?? null)
                    @include('defaultsite.desktop.components-ui.ui-spotlight-news', ['sl' => $latest])
                @endif

                {{-- LIST MAIN NEWS --}}
                @if ($headline[0]['news_id'] ?? null)
                    @include('defaultsite.desktop.components-ui.ui-list-main-news', [
                        'listnews' => $headline,
                    ])
                @endif

                {{-- GALLERY BERITA --}}
                {{-- @dump($headline) --}}
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
                @include('defaultsite.desktop.components-ui.ui-aside', ['reference' => $feed ?? null])
            </div>
        </div>
    </div>
@endsection
