@extends('defaultsite.desktop.layouts.ui-main')

{{-- @push('preload')
    @if ($headline[0]['news_id'] ?? null)
        <link rel="preload" as="image" href="{{ Src::imgNewsCdn($headline[0] ?? null, '640x360', 'webp') }}" />
    @endif
@endpush --}}

@section('content')
    <div class="mt-4">
        <div class="row gx-5">
            <div class="col-8">
                @if ($headline)
                    <div class="main-news-container">
                        <article id="target">
                            <figure>
                                <a href="{{ Src::detail($headline[0]) }}"
                                    aria-label="{{ $headline[0]['news_title'] ?? null }}">
                                    @include('image', [
                                        'source' => $headline[0],
                                        'size' => '640x360',
                                        $headline[0]['news_title'] ?? null,
                                    ])

                                    @if ($headline[0]['news_type'] == 'photonews')
                                        <span class="item-img-info">
                                            <i class="icon icon--photo icon--white mr-1"></i> Lihat Foto
                                        </span>
                                    @endif
                                    @if ($headline[0]['news_type'] == 'video')
                                        <span class="item-img-info">
                                            <i class="icon icon--video icon--white mr-1"></i> Putar Video
                                        </span>
                                    @endif
                                </a>
                                <figcaption> {{ Util::date($headline[0]['news_date_publish'], 'ago') }} </figcaption>
                            </figure>
                        </article>
                        <div class="main-news-deskripsi">
                            <a href="{{ Src::detail($headline[0]) }}" aria-label="{{ $headline[0]['news_title'] ?? null }}">
                                <h3>{{ $headline[0]['news_title'] }}</h3>
                                <p>{{ $headline[0]['news_synopsis'] }}</p>
                            </a>
                        </div>
                    </div>
                    @include('defaultsite.desktop.components-ui.ui-slider', ['headline' => $headline])
                @endif




                {{-- !! END OF HEADLINE !! --}}

                {{-- **BERITA SPOTLIGHT** --}}
                @if ($latest[0]['news_id'] ?? null)
                    @include('defaultsite.desktop.components-ui.ui-spotlight-news', ['sl' => $latest])
                @endif

                {{-- LIST MAIN NEWS --}}
                {{-- @if ($headline[0]['news_id'] ?? null)
                        @include('defaultsite.desktop.components-ui.ui-list-main-news', [
                            'listnews' => $headline,
                        ])
                    @endif --}}

                {{-- ** PROMOTION PRODUCT ** --}}
                {{-- @if ($headline[0]['news_id'] ?? null)
                    @include('defaultsite.desktop.components-ui.ui-promotion', ['pr' => $headline])
                @endif --}}


                {{-- !! WHYYYY !! --}}
                {{-- @dump($latest) --}}
                @include('defaultsite.desktop.components-ui.ui-list-main-news-conf', [
                    'rows' => $latest,
                ])




            </div>
            <div class="col-4">
                @include('defaultsite.desktop.components-ui.ui-aside', ['reference' => $feed ?? null])
            </div>
        </div>
    </div>
@endsection
