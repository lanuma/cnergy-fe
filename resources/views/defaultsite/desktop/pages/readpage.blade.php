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
                {{-- @dump($row) --}}
                @include('defaultsite.desktop.components-ui.ui-credit')

                {{-- SHARE NEWS --}}
                @include('defaultsite.desktop.components-ui.ui-share-news')

                {{-- REPORT ARTICLE --}}
                @include('ui.components.report-article')

                {{-- BERITA TERKAIT --}}
                @include('ui.components.slider-news')

            </div>
            <div class="col-4">
                @include('defaultsite.desktop.components-ui.ui-aside', ['reference' => $row ?? null])
            </div>
        </div>
    </div>

@endsection
