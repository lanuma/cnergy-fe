@extends('defaultsite.desktop.layouts.ui-main')

@section('title', 'Article Page')

@section('content')


    <div class="mt-4" role="main">
        <div class="row gx-5">
            <div class="col-4">

                {{-- @dump($author) --}}
                <h1 class="tags-title">{{ ucwords($author[0]) ?? null }}</h1>
                {{-- PHOTO COLLECTION --}}
                @include('defaultsite.desktop.components-ui.ui-photo-collection')

                {{-- VIDEO COLLECTION --}}
                @include('defaultsite.desktop.components-ui.ui-video-collection')

            </div>
            <div class="col-8">


                @include('defaultsite.desktop.components-ui.ui-list-main-news-conf', ['rows' => $rows])


                @include('defaultsite.desktop.components-ui.ui-pagination', [
                    'current_page' => $data['attributes']['current_page'],
                    'last_page' => $data['attributes']['last_page'],
                    'slug' => 'author/' . $idAuthor . '/' . Str::slug($author[0]),
                ])

            </div>
        </div>
    </div>
@endsection
