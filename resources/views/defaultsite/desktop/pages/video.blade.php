@extends('defaultsite.desktop.layouts.ui-main')

@section('title', 'Video')

@section('content')


    <div class="mt-4">
        @if ($headline[0]['news_id'] ?? null)
            <div class="video-bar my-3">
                <ul>
                    <a href="#">
                        <li>Home
                            <li />
                    </a>
                    <span class="text-dark mx-1"> ></span>
                    <a href="/video" class="text-danger">
                        <li>Video</li>
                    </a>
                </ul>
            </div>
            <div class="video-container">
                <div class="video-item-top" style="background-color: #000000">
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
                        <a href="/">
                            <h4 class="mt-3">TIPS TRIK</h4>
                        </a>
                        <span class="my-2">{{ Util::date($headline[0]['news_date_publish'] ?? null, 'long_time') }}</span>
                        <a href="{{ Src::detail($headline[0]) }}"">
                            <h2>{{ $headline[0]['news_title'] ?? null }}
                            </h2>
                        </a>
                        <p>{{ $headline[0]['news_synopsis'] }}</p>
                    </figcaption>
                </div>
        @endif

        <div class="gallery-video-wrapper m-5">
            @if ($feed ?? null)
                @foreach ($feed as $r)
                    <div class="video-item-gallery">
                        <a href="{{ Src::detail($r) }}" data-duration="{{ null }}">
                            <i class="fa-solid fa-circle-play me-3" style="color: #CA0000"></i>
                            @include('image', [
                                'source' => $r,
                                'size' => '212x115',
                                $r['news_title'] ?? null,
                            ])
                        </a>
                        <div class="video-desc">
                            <a>
                                <h3 href="{{ Src::detail($r) }}">{{ $r['news_title'] ?? null }}</h3>
                            </a>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
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
