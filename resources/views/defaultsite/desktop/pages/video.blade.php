@extends('defaultsite.desktop.layouts.ui-main')

@section('title', 'Video')

@section('content')


    <div class="mt-4">
        @if ($headline[0]['news_id'] ?? null)
            <div class="video-container">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="/video">Video</a></li>
                </ul>
                <div class="video-item" style="background-color: #000000">
                    <figure>
                        <a href="{{ Src::detail($headline[0]) }}">
                            @include('image', [
                                'source' => $headline[0],
                                'size' => '640x360',
                                $headline[0]['news_title'] ?? null,
                            ])
                        </a>
                    </figure>
                    <figcaption class="d-flex flex-column mx-4 my-3">
                        <h4><a href="/">TIPS TRIK</a></h4>
                        <span>{{ Util::date($headline[0]['news_date_publish'] ?? null, 'long_time') }}</span>
                        <h2><a href="{{ Src::detail($headline[0]) }}">{{ $headline[0]['news_title'] ?? null }}
                            </a>
                        </h2>
                        <p>{{ $headline[0]['news_synopsis'] }}</p>
                    </figcaption>
                </div>
            </div>
        @endif

        <div class="gallery-video-wrapper mx-5">
            @if ($feed ?? null)
                @foreach ($feed as $r)
                    <div class="video-item">
                        <a href="{{ Src::detail($r) }}" data-duration="{{ null }}">
                            <i class="fa-solid fa-circle-play me-3" style="color: #CA0000"></i>
                            @include('image', [
                                'source' => $r,
                                'size' => '212x115',
                                $r['news_title'] ?? null,
                            ])
                        </a>
                        <div class="video-desc">
                            <h3><a href="{{ Src::detail($r) }}">{{ $r['news_title'] ?? null }}</a></h3>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

        <div class="row gx-5">
            <div class="col-8">
                {{-- @dump($rows) --}}

                @include('defaultsite.desktop.components-ui.ui-list-video', ['rows' => $latest])
            </div>


            <div class="col-4">
                @dump($popular)
                {{-- @include('defaultsite.desktop.components-ui.ui-trending-video', ['popular' => $latest]) --}}
            </div>
        </div>


    </div>
















@endsection
