@extends('defaultsite.mobile.layouts.ui-main')

@section('content')

@include('defaultsite.mobile.components-ui.main-content-index-m')


{{-- Slider kumpulan foto --}}
{{-- @dump($feed) --}}
{{-- @if ($latest = \Data::latest() ?? null) --}}
    @include('defaultsite.mobile.components-ui.photo-collection', [ 'title' => 'Foto ' ])
{{-- @endif --}}

{{-- Kumpulan video --}}
@include('defaultsite.mobile.components-ui.video-collection', [ 'title' => 'Video ' ])

{{-- adds-on --}}
{{-- @if ($headline[2]['news_id'] ?? null)  --}}
 @include('defaultsite.mobile.components-ui.ads-on')
 {{-- @endif  --}}


{{-- list main news --}}

{{-- @dump($headline) --}}
@if ($popular = \Data::popular() ?? null)
    @include('defaultsite.mobile.components-ui.list-main-news', ['listnews' => $popular])
@endif

{{-- highlight --}} 
{{-- @dump($headline) --}}
@include('defaultsite.mobile.components-ui.highlight-article')


{{-- list main news --}}
{{-- @dump($headline) --}}
@if ($headline = \Data::headline() ?? null)
    @include('defaultsite.mobile.components-ui.list-main-news', ['listnews' => $headline])
@endif


{{-- slider trending tapi data belum ada --}}
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