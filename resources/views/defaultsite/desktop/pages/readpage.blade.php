@extends('defaultsite.desktop.layouts.ui-main')

@section('title', 'Article Page')

@section('content')

    <div class="mt-4">
        <div class="row gx-5">
            <div class="col-8">

                {{-- BERITA UTAMA --}}
                {{-- @dump($row) --}}
                @include('defaultsite.desktop.components-ui.ui-main-content-news')

                {{-- BERITA TERKAIT --}}
                {{-- @dump($row['latest']) --}}
                @include('defaultsite.desktop.components-ui.ui-related-news', ['latest' => $row['latest']])

            </div>
            <div class="col-4">
                {{-- <div class="mx-4"> --}}
                @include('defaultsite.desktop.components-ui.ui-aside', ['reference' => $row ?? null])
                {{-- </div> --}}
            </div>
        </div>
    </div>

@endsection
