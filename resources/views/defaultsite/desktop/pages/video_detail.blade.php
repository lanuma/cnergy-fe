@extends('defaultsite.desktop.layouts.ui-main')
@section('title', 'Article Page')
@section('content')
    {{-- @push('preload')
    {!! RecaptchaV3::initJs() !!}
@endpush --}}
    {{-- @push('styles')
<link rel="preload" href="{{ Src::mix('css/detail.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="{{ Src::mix('css/detail.css') }}" /></noscript>
<style>
    iframe {
        max-width: 100%;
        margin: auto;
    }
    .instagram-media-rendered{
        margin: 5px auto!important;
    }
</style>
@endpush --}}

    {{-- @if (config('app.enabled_tracking'))
    @push('script')
    <script>
        var url = '{{ str_replace('api', 'analytics', config('app.api_url')) }}/jsview2/';
        var xhr = new XMLHttpRequest();
        xhr.open('POST', url, true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.send('{!! http_build_query(['url'=>Src::detail($row??null), 'platform'=>config('site.device')=='mobile'?'m':'www']) !!}');
    </script>
    @endpush
@endif --}}
    <div class="mt-4">
        <div class="row gx-5">
            <div class="col-8">
                {{-- ?? BERITA UTAMA ?? --}}
                @include('defaultsite.desktop.components-ui.ui-main-content-video')

                {{-- ?? RELATED TAG ?? --}}
                @include('defaultsite.desktop.components-ui.ui-related-tag')

                {{-- ?? CREDITS ?? --}}
                @include('defaultsite.desktop.components-ui.ui-credit')

                {{-- ?? SHARE NEWS ?? --}}
                @include('defaultsite.desktop.components-ui.ui-share-news')

                <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-light report-btn"><i
                        class="fa-solid fa-triangle-exclamation" style="color: #ca0000"></i> Laporkan Artikel</button>

                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                        {{-- ?? MODAL CONTENT ?? --}}
                        <div class="modal-content">
                            <div class="modal-body">
                                {{-- ?? FORM REPORT ?? --}}
                                @include('defaultsite.desktop.components-ui.ui-form-report')
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-4">
                @include('defaultsite.desktop.components-ui.ui-aside', ['reference' => $row ?? null])
            </div>
        </div>
    </div>

@endsection
