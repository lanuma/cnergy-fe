@extends('defaultsite.desktop.layouts.ui-main')

@section('title', 'Index Tag Paging')

@section('content')


    @include('defaultsite.desktop.components-ui.ui-tab-news')

    <div class="mt-4">
        <div class="row gx-5">
            <div class="col-4">

                {{-- MORE INFO --}}
                {{-- @dump($headline) --}}
                @include('defaultsite.desktop.components-ui.ui-more-info')

                {{-- PHOTO COLLECTION --}}
                {{-- @dump($photo)  --}}
                @include('defaultsite.desktop.components-ui.ui-photo-collection')

                {{-- VIDEO COLLECTION --}}
                {{-- @dump($video) --}}
                @include('defaultsite.desktop.components-ui.ui-video-collection')

            </div>
            <div class="col-8">

                {{-- LIST NEWS --}}
                {{-- @dump($rows) --}}
                <div class="list-main-news-container">

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
                </div>



                {{-- VIDEO NEWS --}}
                {{-- @dump($rows) --}}
                <div class="video-news-container">
                    <p>{{ $rows[1]['news_type'] }}</p>
                    <span>{{ $rows[1]['news_date_publish'] }}</span>
                    <h4>{{ $rows[1]['news_title'] }}</h4>
                    <iframe width="100%" height="500" src='{{ $rows[1]['news_image']['real'] }}'
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>


            </div>
        </div>
    </div>

@endsection
