@extends('defaultsite.mobile.layouts.ui-main')

@section('content')

{{-- headline --}}    
@if ($headline[0]['news_type'] == 'news' ?? null)
    @include('defaultsite.mobile.components-ui.main-news', ['mn' => $headline])
@endif

<div style="padding: 0px 20px 0px 20px">
    {{-- Adds-1 --}}    
    {{-- @if ($headline[2]['news_id'] ?? null) --}}
    @include('defaultsite.mobile.components-ui.ads-on')
    {{-- @endif --}}

    {{-- trending tag --}}
    @include('defaultsite.mobile.components-ui.trending-tag')

    {{-- list main news --}}
    @if ($headline[0]['news_id'] ?? null)
        @include('defaultsite.mobile.components-ui.list-main-news', ['listnews' => $headline])
    @endif

    {{-- slider --}}
    @if ($headline[0]['news_id'] ?? null)
    @include('defaultsite.mobile.components-ui.slider', ['hl' => $headline])
    @endif

    @include('defaultsite.mobile.components-ui.ads-main')

    {{-- list main news --}}
    @if ($headline[0]['news_id'] ?? null)
        @include('defaultsite.mobile.components-ui.list-main-news', ['listnews' => $headline])
    @endif

    {{-- slider --}}
    @if ($headline[0]['news_id'] ?? null)
    @include('defaultsite.mobile.components-ui.slider', ['hl' => $headline])
    @endif

    {{-- list main news --}}
    @if ($headline[0]['news_id'] ?? null)
        @include('defaultsite.mobile.components-ui.list-main-news', ['listnews' => $headline])
    @endif

</div>


@endsection  