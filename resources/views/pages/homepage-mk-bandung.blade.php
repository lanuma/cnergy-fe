@extends('template.template')

@section('title', 'Homepage')

@section('content-field')
    {{-- LAYOUT HOMEPAGE --}}
    <header>
        @include('components.navbar')
        @include('components.breaking-news')
    </header>

    <div class="mt-4">
        <div class="row gx-5">
            <div class="col-8">

                {{-- BERITA UTAMA --}}
                @include('components.main-news')

                {{-- BERITA UTAMA LAINNYA --}}
                <div class="mt-4">
                    <h4 class="special-font-prompt text-uppercase fst-italic fw-bold"
                        style="font-size: 16px; margin-left: 20px">Berita Utama Lainnya</h4>
                    @include('components.slider-news')
                </div>

                {{-- BERITA SPOTLIGHT --}}
                <div class="mt-4">
                    <h4 class="special-font-prompt text-uppercase fst-italic fw-bold"
                        style="font-size: 16px; margin-left: 20px">spotlight</h4>
                    @include('components.slider-news')
                </div>

                {{-- LIST MAIN NEWS --}}
                @include('components.list-main-news')


                {{-- GALLERY BERITA --}}
                @include('components.gallery-news')


                {{-- PROMOTION PRODUCT --}}
                @include('components.promotion-product')


                {{-- VIDEO NEWS --}}
                @include('components.video-news')


                {{-- LIST MAIN NEWS REPEAT --}}
                @include('components.list-main-news')

            </div>
            <div class="col-4">

                {{-- TRENDING TAG --}}
                @include('components.trending-tag')

                {{-- LIVE STREAMING --}}
                @include('components.live-streaming')

                {{-- BERITA SIDEBAR --}}
                @include('components.sidebar-news')

                {{-- BERITA POPULER --}}
                @include('components.populer-news')

            </div>
        </div>
    </div>

    {{-- FOOTER --}}
    @include('components.footer')
@endsection

@section('script-slider')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ URL::asset('assets/js/script.js') }}"></script>
@endsection