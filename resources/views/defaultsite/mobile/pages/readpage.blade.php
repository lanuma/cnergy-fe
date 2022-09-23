@extends('defaultsite.mobile.layouts.ui-main')

@section('content')

{{-- breaking news --}}
@include('defaultsite.mobile.components-ui.breaking-news')

{{-- headline news --}}    
@include('defaultsite.mobile.components-ui.main-news-article')

{{-- read too list --}}
@include('defaultsite.mobile.components-ui.read-too-list')

{{-- related tag --}}
@include('defaultsite.mobile.components-ui.related-tag')

{{-- related artikel --}}
@include('defaultsite.mobile.components-ui.related-article', ['ra' => $row['news_related']] )

{{-- trending tag --}}
@include('defaultsite.mobile.components-ui.trending-tag')

{{-- slider latest news --}}
@if ($popular = \Data::popular() ?? null)
    @include('defaultsite.mobile.components-ui.slider', ['hl' => $popular, 'title' => 'Berita Populer'])
@endif

{{--list populer news--}}
@if ($popular = \Data::popular() ?? null)
    @include('defaultsite.mobile.components-ui.populer-news', ['hl' => $popular])
@endif

{{-- slider latest news --}}
@if ($latest = \Data::latest() ?? null)
    @include('defaultsite.mobile.components-ui.slider', ['hl' => $latest, 'title' => 'Berita Terbaru'])
@endif

@endsection