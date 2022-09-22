@extends('defaultsite.mobile.layouts.ui-main')




@section('content')
{{-- headline news --}}    
{{-- @dump($row) --}}
@include('defaultsite.mobile.components-ui.main-news-article')

{{-- read too list --}}

@include('defaultsite.mobile.components-ui.read-too-list')

{{-- related tag --}}
@include('defaultsite.mobile.components-ui.related-tag')

{{-- related artikel --}}
{{-- @dump($row) --}}

@include('defaultsite.mobile.components-ui.related-article', ['item' => $row] )

{{-- trending tag --}}
@include('defaultsite.mobile.components-ui.trending-tag')

{{-- slider --}}
{{-- @dump($row) --}}
@if ($row[0]['news_id'] ?? null)
    @include('defaultsite.mobile.components-ui.slider-article', ['hl' => $row])
    @endif
@endsection