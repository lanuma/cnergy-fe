@extends('defaultsite.desktop.layouts.ui-main')

@section('title', 'Index Tag Paging')

@section('content')


    @include('defaultsite.desktop.components-ui.ui-tab-news')

    <div class="mt-4">
        <div class="row gx-5">
            <div class="col-4">

                {{-- MORE INFO --}}
                @include('defaultsite.desktop.components-ui.ui-more-info')

                {{-- PHOTO COLLECTION --}}
                @include('defaultsite.desktop.components-ui.ui-photo-collection')

                {{-- VIDEO COLLECTION --}}
                @include('defaultsite.desktop.components-ui.ui-video-collection')

            </div>
            <div class="col-8">

                @include('defaultsite.desktop.components-ui.ui-list-main-news-conf', [
                    'rows' => $rows,
                ])

                {{-- pagination --}}
                @include('defaultsite.desktop.components-ui.ui-pagination', [
                    'current_page' => $data['attributes']['current_page'],
                    'last_page' => $data['attributes']['last_page'],
                    'slug' => 'tag/' . $tag['slug'],
                ])




            </div>
        </div>
    </div>

@endsection
