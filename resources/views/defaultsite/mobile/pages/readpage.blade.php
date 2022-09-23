@extends('defaultsite.mobile.layouts.ui-main')

@section('content')

{{-- headline news --}}
@include('defaultsite.mobile.components-ui.main-news-article')

{{-- read too list --}}
@if ($popular = \Data::popular() ?? null)
    @include('defaultsite.mobile.components-ui.read-too-list' , ['news' => $popular])
@endif

{{-- related tag --}}
@include('defaultsite.mobile.components-ui.related-tag')

{{-- related artikel --}}
@if ($latest = \Data::popular() ?? null)
@include('defaultsite.mobile.components-ui.related-article', ['news' => $latest, 'title' => 'Berita Terbaru']) 
@endif
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