@extends('defaultsite.desktop.layouts.ui-main')


@section('content')

    <div class="mt-4">
        <div class="row gx-5">
            <div class="col-8">
                @if ($headline)
                    <div class="main-news-container">
                        <article>
                            <figure>
                                <a href="{{ Src::detail($headline) }}" aria-label="{{ $headline['news_title'] ?? null }}">
                                    @include('image', [
                                        'source' => $headline,
                                        'size' => '640x360',
                                        $headline['news_title'] ?? null,
                                    ])

                                    @if ($headline['news_type'] == 'photonews')
                                        <span class="img-info"> Open Photo
                                            <i class="fa-sharp fa-solid fa-camera ms-2" style="color: #CA0000"></i>
                                        </span>
                                    @endif
                                    @if ($headline['news_type'] == 'video')
                                        <span class="video-info"> Play Video
                                            <i class="fa-solid fa-circle-play ms-2" style="color: #CA0000"></i>
                                        </span>
                                    @endif
                                </a>
                                <figcaption> {{ Util::date($headline['news_date_publish'], 'ago') }} </figcaption>
                            </figure>
                        </article>
                        <div class="main-news-deskripsi">
                            <a href="{{ Src::detail($headline) }}" aria-label="{{ $headline['news_title'] ?? null }}">
                                <h3 class="text-dark">{{ $headline['news_title'] }}</h3>
                            </a>
                            <p>{{ $headline['news_synopsis'] }}</p>
                        </div>
                        {{-- **BERITA SLIDE** --}}
                        @if (count($feed) > 0 ?? null)
                            @include('defaultsite.desktop.components-ui.ui-slider', ['fd' => $feed])
                        @endif
                    </div>

                    {{-- **BERITA SPOTLIGHT** --}}
                    <div class="spotlight-wrapper">
                        @if ($latest['data'] ?? null)
                            @include('defaultsite.desktop.components-ui.ui-spotlight-news', [
                                'sl' => $latest['data'],
                            ])
                        @endif
                    </div>
                @endif

                {{-- !! END OF HEADLINE !! --}}

                {{-- @dump($latest['data']) --}}
                @include('defaultsite.desktop.components-ui.ui-list-main-news-conf', [
                    'rows' => $latest['data'],
                ])


                @include('defaultsite.desktop.components-ui.ui-pagination', [
                    'current_page' => $latest['attributes']['current_page'],
                    'last_page' => $latest['attributes']['last_page'],
                    'slug' => $slug,
                ])

            </div>
            <div class="col-4">
                @include('defaultsite.desktop.components-ui.ui-aside', ['reference' => $feed ?? null])
            </div>
        </div>
    </div>
@endsection
