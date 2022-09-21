@extends('defaultsite.desktop.layouts.ui-main')

@section('title', 'Article Page')

@section('content')

    <div class="mt-4">
        <div class="row gx-5">
            <div class="col-8">

                {{-- BERITA UTAMA --}}
                {{-- @dump($row) --}}
                @include('defaultsite.desktop.components-ui.ui-main-content-news')

                {{-- RELATED TAG --}}
                @include('defaultsite.desktop.components-ui.ui-related-tag')

                {{-- CREDITS --}}
                @include('ui.components.credit')

                {{-- SHARE NEWS --}}
                @include('ui.components.share-news')

                {{-- REPORT ARTICLE --}}
                @include('ui.components.report-article')

                {{-- BERITA TERKAIT --}}
                @include('ui.components.slider-news')

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

@endsection
