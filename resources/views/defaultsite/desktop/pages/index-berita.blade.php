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
                                        <span class="item-img-info">
                                            <i class="icon icon--photo icon--white mr-1"></i> Lihat Foto
                                        </span>
                                    @endif
                                    @if ($headline['news_type'] == 'video')
                                        <span class="item-img-info">
                                            <i class="icon icon--video icon--white mr-1"></i> Putar Video
                                        </span>
                                    @endif
                                </a>
                                <figcaption> {{ Util::date($headline['news_date_publish'], 'ago') }} </figcaption>
                            </figure>
                        </article>
                        <div class="main-news-deskripsi">
                            <a href="{{ Src::detail($headline) }}" aria-label="{{ $headline['news_title'] ?? null }}">
                                <h3>{{ $headline['news_title'] }}</h3>
                                <p>{{ $headline['news_synopsis'] }}</p>
                            </a>
                        </div>
                    </div>
                    @include('defaultsite.desktop.components-ui.ui-slider', ['fd' => $feed])
                @endif




                {{-- !! END OF HEADLINE !! --}}

                {{-- **BERITA SPOTLIGHT** --}}
                {{-- @dump($latest['data']) --}}
                @if ($latest['data'] ?? null)
                    @include('defaultsite.desktop.components-ui.ui-spotlight-news', [
                        'sl' => $latest['data'],
                    ])
                @endif



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
