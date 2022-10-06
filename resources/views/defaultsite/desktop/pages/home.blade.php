@extends('defaultsite.desktop.layouts.ui-main')

@section('content')
    <div class="mt-4">
        <div class="row gx-5">
            <div class="col-8">
                @if ($headline[0]['news_id'] ?? null)
                    <div class="main-news-container">
                        <article>
                            <figure>
                                <a href="{{ Src::detail($headline[0]) }}"
                                    aria-label="{{ $headline[0]['news_title'] ?? null }}">
                                    @include('image', [
                                        'source' => $headline[0],
                                        'size' => '640x360',
                                        $headline[0]['news_title'] ?? null,
                                    ])
                                    @if ($headline[0]['news_type'] == 'photonews')
                                        <span class="img-info"> Lihat Foto
                                            <i class="fa-sharp fa-solid fa-camera ms-2" style="color: #CA0000"></i>
                                        </span>
                                    @endif
                                    @if ($headline[0]['news_type'] == 'video')
                                        <span class="video-info"> Lihat Video
                                            <i class="fa-solid fa-circle-play ms-2" style="color: #CA0000"></i>
                                        </span>
                                    @endif
                                </a>
                                <figcaption> {{ Util::date($headline[0]['news_date_publish'], 'ago') }} </figcaption>
                            </figure>
                        </article>
                        <div class="main-news-deskripsi">
                            <a href="{{ Src::detail($headline[0]) }}" aria-label="{{ $headline[0]['news_title'] ?? null }}">
                                <h3 class="text-dark">{{ $headline[0]['news_title'] }}</h3>
                            </a>
                            <p>{{ $headline[0]['news_synopsis'] }}</p>
                        </div>
                        @if (count($feed) > 0 ?? null)
                            @include('defaultsite.desktop.components-ui.ui-slider', ['fd' => $feed])
                        @endif
                    </div>

                    {{-- **BERITA SPOTLIGHT** --}}
                    <div class="spotlight-wrapper">
                        @if ($latest[0]['news_id'] ?? null)
                            @include('defaultsite.desktop.components-ui.ui-spotlight-news', [
                                'sl' => $latest,
                            ])
                        @endif
                    </div>
                @endif


                {{-- !! END OF HEADLINE !! --}}


                @include('defaultsite.desktop.components-ui.ui-list-main-news-conf', [
                    'rows' => $latest,
                ])

                <div class="d-flex justify-content-center align-content-center my-4"><a href="/index-berita"
                        class="border border-danger p-3 px-4 text-danger">Indeks Berita</a>
                </div>
            </div>
            <div class="col-4">
                @include('defaultsite.desktop.components-ui.ui-aside', ['reference' => $feed ?? null])
            </div>

        </div>
    </div>
@endsection
