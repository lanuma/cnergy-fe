@extends('defaultsite.mobile.layouts.ui-main')





@section('content')


{{-- breaking-news --}}
{{-- @dump($headline) --}}
{{-- @if ($headline[2]['news_id'] ?? null) --}}
@include('defaultsite.mobile.components-ui.main-news')
{{-- @endif --}}

{{-- Adds-1 --}}    
{{-- @if ($headline[2]['news_id'] ?? null) --}}
@include('defaultsite.mobile.components-ui.ads-on')
{{-- @endif --}}

{{-- trending tag --}}

@include('defaultsite.mobile.components-ui.trending-tag')

{{-- slider --}}
@if ($headline[0]['news_id'] ?? null)
@include('defaultsite.mobile.components-ui.slider', ['hl' => $headline])
@endif


{{-- footer --}}
@include('defaultsite.mobile.components-ui.footer')



@endsection  