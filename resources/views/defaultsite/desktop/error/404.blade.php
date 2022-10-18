@extends('defaultsite.desktop.layouts.ui-main')
@php
    $latest = \Data::latest(path: 'news', alltype: 0, ex_id: null);
    
    $rows = collect($latest)->slice(0, Site::isMobile() ? 20 : 21);
@endphp

@section('content')
    <div class="mt-4">
        <div class="row gx-5">
            <div class="col-8">
                @include('defaultsite.desktop.components-ui.ui-not-found')
                <div style="margin: 50px 0">
                    @include('defaultsite.desktop.components-ui.ui-related-news', [
                        'latest' => $rows,
                        'title' => 'Latest News',
                    ])
                </div>
            </div>
            <div class="col-4">
                @include('defaultsite.desktop.components-ui.ui-aside', ['reference' => null])
            </div>
        </div>
    </div>
@endsection
