@extends('defaultsite.desktop.layouts.ui-main')

@section('title', 'Index Paging')

@section('content')


    <div class="mt-4">
        <div class="row gx-5">
            <div class="col-4">
                {{-- INDEX KANAL --}}
                @include('defaultsite.desktop.components-ui.ui-index-kanal')

            </div>
            <div class="col-8">
                {{-- UI MAIN NEWS --}}
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
                                        <span class="item-img-info">
                                            <i class="icon icon--photo icon--white mr-1"></i> Open Photo
                                        </span>
                                    @endif
                                    @if ($headline['news_type'] == 'video')
                                        <span class="item-img-info">
                                            <i class="icon icon--video icon--white mr-1"></i> Play Video
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
                        @include('defaultsite.desktop.components-ui.ui-slider', ['fd' => $feed])
                    </div>
                @endif

                {{-- @dump($latest['data']) --}}
                @include('defaultsite.desktop.components-ui.ui-list-main-news-conf', [
                    'rows' => $latest['data'],
                ])


                {{-- @include('defaultsite.desktop.components-ui.ui-list-main-news', [
                    'listnews' => $latest['data'],
                ]) --}}

                @include('defaultsite.desktop.components-ui.ui-pagination', $latest['attributes'])


            </div>
        </div>
    </div>


@endsection
