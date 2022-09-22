@extends('defaultsite.mobile.layouts.ui-main')




@section('content')
{{-- headline news --}}    
{{-- @dump($row) --}}
@include('defaultsite.mobile.components-ui.main-news-article')

{{-- ads --}}
@include('defaultsite.mobile.components-ui.ads-on')

{{-- dt-share --}}
@include('defaultsite.mobile.components-ui.dt-share')


@endsection