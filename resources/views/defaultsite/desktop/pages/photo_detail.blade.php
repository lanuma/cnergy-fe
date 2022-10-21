@extends('defaultsite.desktop.layouts.ui-main')

<style>
    .description {
        line-height: 18px;
        max-height: calc(18px * 1);
        overflow: hidden;
    }

    .check-input {
        display: none;
    }

    .button-readmore::after {
        content: 'Read More';
        display: inline-block;
    }

    .button-readmore {
        display: inline-block;
        font-size: 12px;
        border-radius: 4px;
        cursor: pointer;
    }

    .button-readmore:hover {
        color: #dc3545;
    }

    .check-input:checked~.button-readmore::after {
        content: 'Read Less';

    }

    .check-input:checked~.description {
        max-height: 100vh;
    }

    /* Hide input checkbox */
    /* #check-readmore {
        position: absolute;
        left: -100px;
    } */
</style>



@section('title', $row['news_title'])

{{-- Exlude Header --}}
@section('header')
@endsection

{{-- Exclude Breaking News --}}
@section('breaking')
@endsection

@section('khusus-photo-detail')
    {{-- @dump($row) --}}
    <div class="photo-detail-section">
        <div class="container w-kly">
            {{-- Header --}}
            @include('defaultsite.desktop.components-ui.ui-header')

            {{-- Breaking News --}}
            @include('defaultsite.desktop.components-ui.ui-breaking-news')
        </div>
        <div class="content-photo-detail d-flex mt-5">
            <div class="col-8 photo-scroll">

                <div class="black-bg-photo" id="photo-screen">
                    <div class="photo-tools">
                        <a href="/photo" style="color: white"> <i class="fa-solid fa-chevron-left"></i> Kembali</a>
                        <div class="share-links">
                            <a target="_blank"
                                href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current() . '?utm_source=Desktop&utm_medium=facebook&utm_campaign=Share_Top') }}"><i
                                    class="fa-brands fa-facebook-f"></i></a>
                            <a target="_blank"
                                href="https://twitter.com/intent/tweet?text={{ urlencode(url()->current() . '?utm_source=Desktop&utm_medium=twitter&utm_campaign=Share_Top') }}"><i
                                    class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-solid fa-link"></i></a>
                        </div>
                        <button onclick="openFullscreen();">
                            <i class="fa-solid fa-expand"></i>
                        </button>
                    </div>
                    @if (count($row['photonews']) > 0 ?? null)
                        <div class="photo-detail-container">
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                                <div class="carousel-indicators d-flex align-items-center list-photo-detail">
                                    @foreach ($row['photonews'] as $photo)
                                        <button type="button" data-bs-target="#carouselExampleIndicators"
                                            data-bs-slide-to="{{ $loop->index }}"
                                            class="{{ $loop->first ? 'active' : '' }}" aria-current="false"
                                            aria-label="Slide {{ $loop->index + 1 }}">
                                            <img src="{{ $photo['image']['real'] }}" class="d-block w-100">
                                        </button>
                                    @endforeach
                                </div>
                                <div class="carousel-inner">
                                    @foreach ($row['photonews'] as $photo)
                                        {{-- @dump($row) --}}
                                        <div class="carousel-item {{ $loop->first ? ' active' : '' }}">
                                            <div class="carousel-image-desc">
                                                <img src="{{ $photo['image']['real'] }}" class="d-block w-100">
                                                <div
                                                    class="d-flex justify-content-between text-desc-photo gap-2 align-items-center">
                                                    <p class="description">{{ $photo['description'] }} </p>
                                                    <input class="check-input" type="checkbox" id="{{ $photo['id'] }}">
                                                    <label style="width: 120px; text-align: center; font-style: italic"
                                                        for="{{ $photo['id'] }}" class="button-readmore"></label>

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    @endif
                </div>

            </div>
            <div class="col-4 vertical-scroll">
                <div class="all-news-info">
                    <h2 class="special-font-lato fw-bold" style="font-size: 30px;">{{ $row['news_title'] }}</h2>

                    <div class="info-author">
                        <a class="" href="{{ Src::author($row) }}">{{ $row['news_editor'][0]['name'] ?? null }}</a>
                        <span class="">{{ Util::date($row['news_date_publish'] ?? null, 'long_time') }}</span>
                    </div>

                    <div class="synopsis">
                        <p>{{ $row['news_synopsis'] ?? null }}</p>
                    </div>

                    <div class="editor-photo">
                        <span><b>Editor:</b> {{ $row['news_editor'][0]['name'] ?? null }} </span>
                        <span><b>Photographer:</b> {{ $row['news_photographer'][0]['name'] ?? null }}</span>
                    </div>

                    <div class="tag-related-detail">
                        @include('defaultsite.desktop.components-ui.ui-related-tag')
                    </div>

                    <button type="button" data-toggle="modal" data-target="#myModal"
                        class="btn btn-light report-btn mt-5"><i class="fa-solid fa-triangle-exclamation"
                            style="color: #ca0000"></i> Report Article </button>

                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-body">
                                    {{-- FORM REPORT --}}
                                    @include('defaultsite.desktop.components-ui.ui-form-report')
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- Berita terkini --}}
                    @include('defaultsite.desktop.components-ui.ui-latestphoto', [
                        'latest' => $row['latest'],
                    ])
                </div>
                <div style="background: #333333; padding: 30px 10px; text-align:center"
                    class="d-flex flex-column align-items-center gap-5">
                    <a href="/">
                        <img src="{{ URL::asset('assets/images/logo-footer.png') }}" alt="logo footer" width="170px">
                    </a>
                    <div class="link-footer">
                        {{-- menu --}}
                    </div>
                    <p style="color: #FFFFFF">{!! nl2br(config('site.attributes.address')) !!}</p>
                    <div class="social-media mx-3">
                        @if ($socmed->fb ?? null)
                            <a href="{{ $socmed->fb }}" aria-label="facebook">fb</a>
                        @endif
                        @if ($socmed->twitter ?? null)
                            <a href="{{ $socmed->twitter }}" aria-label="twitter"><i class="fa-brands fa-twitter fa-2xl"
                                    style="color: #1DADEB"></i></a>
                        @endif
                        @if ($socmed->youtube ?? null)
                            <a href="{{ $socmed->youtube }}" aria-label="youtube"><i
                                    class="fa-brands fa-youtube"></i></a>
                        @endif
                        @if ($socmed->ig ?? null)
                            <a href="{{ $socmed->ig }}" aria-label="instagram"><i
                                    class="fa-brands fa-square-instagram"></i></a>
                        @endif
                    </div>
                    <span style="color: #FFFFFF">Copyright &copy; {{ date('Y') }}
                        {{ config('site.attributes.title') }} KLY KapanLagi Youniverse All Rights Reserved </span>
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
    function openFullscreen() {
        if (document.getElementById("photo-screen").requestFullscreen) {
            document.getElementById("photo-screen").requestFullscreen();
        } else if (document.getElementById("photo-screen").webkitRequestFullscreen) {
            /* Safari */
            document.getElementById("photo-screen").webkitRequestFullscreen();
        } else if (document.getElementById("photo-screen").msRequestFullscreen) {
            /* IE11 */
            document.getElementById("photo-screen").msRequestFullscreen();
        }
    }
</script>
