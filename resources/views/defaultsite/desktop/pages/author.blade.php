@extends('defaultsite.desktop.layouts.ui-main')

@section('title', 'Article Page')

@section('content')
    {{-- @push('styles')
        <link rel="preload" href="{{ Src::mix('css/tag.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript>
            <link rel="stylesheet" href="{{ Src::mix('css/tag.css') }}" />
        </noscript>
        <style>
            .channel-ad_ad-sc,
            .channel-ad_ad-sc2,
            .channel-ad_ad-hl {
                margin-top: 15px;
                margin-bottom: 15px;
            }

            .main-aside {
                position: unset
            }
        </style>
    @endpush --}}

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
                {{-- <div class="list-main-news-container">
                    @foreach ($rows as $ln)
                        <div class="d-flex align-items-start gap-3 list-main-news-card">
                            <div class="list-news-image">
                                <a href="{{ Src::detail($ln) }}" aria-label="{{ $ln['news_title'] ?? null }}">
                                    @include('image', [
                                        'source' => $ln,
                                        'force' => '230x129',
                                        'size' => '230x129',
                                        $ln['news_title'] ?? null,
                                    ])
                                </a>
                            </div>
                            <div class="list-main-news-deskripsi">
                                <div class="category-and-time">
                                    <span class="text-uppercase text-danger fw-bold">{{ $ln['news_type'] }}</span>
                                    <span class="text-black-50">{{ Util::date($ln['news_date_publish'], 'ago') }}</span>
                                </div>
                                <a href="{{ Src::detail($ln) }}" aria-label="{{ $ln['news_title'] ?? null }}">
                                    <h4>{{ $ln['news_title'] }}</h4>
                                    <p>{{ $ln['news_synopsis'] }}</p>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div> --}}


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
