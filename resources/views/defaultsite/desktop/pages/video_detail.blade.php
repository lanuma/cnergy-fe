@extends('defaultsite.desktop.layouts.ui-main')
@section('title', 'Article Page')
@section('content')
    {{-- @push('preload')
    {!! RecaptchaV3::initJs() !!}
@endpush --}}
    {{-- @push('styles')
<link rel="preload" href="{{ Src::mix('css/detail.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="{{ Src::mix('css/detail.css') }}" /></noscript>
<style>
    iframe {
        max-width: 100%;
        margin: auto;
    }
    .instagram-media-rendered{
        margin: 5px auto!important;
    }
</style>
@endpush --}}

    {{-- @if (config('app.enabled_tracking'))
    @push('script')
    <script>
        var url = '{{ str_replace('api', 'analytics', config('app.api_url')) }}/jsview2/';
        var xhr = new XMLHttpRequest();
        xhr.open('POST', url, true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.send('{!! http_build_query(['url'=>Src::detail($row??null), 'platform'=>config('site.device')=='mobile'?'m':'www']) !!}');
    </script>
    @endpush
@endif --}}

    <div class="main-content-news-container">
        <div class="container w-kly px-8">

            <ul class="main-breadcrumb flex items-center flex-wrap list-none mb-6">
                <li class="main-breadcrumb-item"><a href="/">Home</a></li>
                @foreach ($row['news_category'] as $r)
                    @if ($loop->iteration == 1)
                        <li class="main-breadcrumb-item {{ $loop->count == 1 ? 'active' : '' }}"><a
                                href="{{ Src::category($row) }}">{{ $r['name'] ?? null }}</a></li>
                    @elseif($loop->iteration == 2)
                        <li class="main-breadcrumb-item {{ $loop->count == 2 ? 'active' : '' }}"><a
                                href="{{ url(($row['news_category'][0]['url'] ?? '') . '/' . ($row['news_category'][1]['url'] ?? '')) }}">{{ $r['name'] ?? null }}</a>
                        </li>
                    @elseif($loop->iteration == 3)
                        <li class="main-breadcrumb-item {{ $loop->count == 3 ? 'active' : '' }}"><a
                                href="{{ url(($row['news_category'][0]['url'] ?? '') . '/' . ($row['news_category'][1]['url'] ?? '') . '/' . ($row['news_category'][2]['url'] ?? '')) }}">{{ $r['name'] ?? null }}</a>
                        </li>
                    @endif
                @endforeach
            </ul>

            <h4>{{ $row['news_title'] ?? null }}</h4>
            <div class="account-shared-content my-4">
                <div class="account">
                    <a class="dt-info-user-image rounded-full" href="#">
                        <img class="aspect-square"
                            src="{{ $row['news_editor'][0]['image'] ??'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFAAAABQCAYAAACOEfKtAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH4AgJCiccVLvelQAABVVJREFUeNrtnG1v0zwUhm87WdqsCUm00nWgMgZMQrSbxJ/nZ6xSpexTAakbhdFutDSN17yZD6jTxsN49mKnHviW8jknl2/7HMcnIaenpxxadxbVCDTAlcpUKRhCyJXrsjjnVy4N8BdxzvHt2zdMJhPMZjMwxpBl2c8gTRO2bcN1Xfi+D9/3/wN4ZYO+qiRiGAYYYxiPxzg9PcV0OkWe5zdyoGEY8DwPGxsbqNfrsG0beZ7/OwA553j//j1OTk7uPR0JIdjc3MTLly9X4srSAY7HY3z48AHn5+egVEwOK4oC1WoVL168QL1e/zsBGoaBMAwxHo+l3qder6Pdbpc2pUsBmGUZer0eoigS5ro/udFxHOzv78M05edI6XUg5xy9Xg9xHEuHBwCUUsRxjF6vV0q5I/2Jut0u5vN56Yv7fD5Ht9t92AD7/T7m8/lqsiMhmM/n6Pf7Dw8gIQRRFGE4HK604CWEYDgcIooiaXFIAVgUBcIwLGXNu8maGIYhiqJ4GAAJIRgMBkiSRJn9apIkGAwGUlwoHGCaphiNRsrsVZeDOhqNkKap+gAZY2CMQTXJiksoQEopjo+PoaqOj4+Fr8vCHTgej5WavpensYxtJBUZ4GQykZbtRFUHk8lE6AALdeBsNlPSfZcHeTabqevAVe06VhmjUAcuFgvlAS4WC3WTyPIMQ2WJjpGKHmHVJTpGoQDX1taUByg6RqEAK5WKUme2v4pzjkqloiZAzjlqtZryAEXHKNSBrusqD9B1XXUd6Hme8mWM53nqOpBzjo2NDSVdKCs24QCbzaayAGXEJhyg4ziwLEs5gJZlwXEctQEuA63VasoBrNVqUgZWOEBKKba2tpSaxpxzbG1tSTnkojKCbTQaqFarSkDknKNaraLRaEiJh8oK+vXr18oAlBmLNICO4yAIgpUDDIJASvKQCnBZtG5vb6/0FX9RFNje3pZa3FPZo99qtVYCsSgKtFot6bNAKsA8z/H8+fOVTOUgCLCzsyO90VJ68wohBLu7uzAMozR4hmFgd3e3lHuV0v2zvr6Ovb290hos9/b2sL6+/vcAXLbddjodqRAppeh0OnAcp7R1t9T+M9/30W63YVmW0LKCcw7LstBut+H7fqlrbWkACSHgnCMIAnQ6HaH7Usuy0Ol0EAQBOOelvpOU0qW//NIoSRIwxnB+fo7v378jiiJEUYQ0TYV30GdZhrW1NTiOA8dx8OjRI1SrVdi2feF4GcW0UICUUhRFga9fv+LLly9gjCHPcxRFUaozlveilMIwDNi2jWaziUajcRGjEgCXQBaLBeI4xufPnzEaja64UJW3MUv3PX78GM1mE7Va7eKE7j7OvDNA0zQxmUxwdHSE2Wx20TKh+uH6ElalUoHrumi1WvB9/84dC7cGWBQFGGPo9/uYTqdKNJLft8TyPA+vXr2Cbdu3fp4bAzRNEycnJ/j06ROm0+mDcNttXel5Hp4+fYrNzc0bO/JGAJMkweHhofL9f6Jguq6LN2/e3KjUuhYgIQRZlmEwGGA4HKIoir8e3mWIlFI8efIEz549g2ma1yaa3wJcNiL2er0H0bImU6ZpYn9//9qWkN8CPDo6wsePHx98ghCZaHZ2dtBqtf4MkHOObreLOI41tWveKr19+/bKUkaXU5YxhoODAw3vD4rjGAcHB2CMXUAkZ2dnfDqdIgxDZFn2zySK+yQY0zTRbrfheR5oFEUIw/DilyNa/799zfMcYRj+/Iz23bt3PEkSDe8OTrQsCzRNUw3vjk5M01T/fOy+0gA1QA1QA9QAtTRADVAD1AC1NEANUAPUALU0QA1QA/x39AMzx8A5MRN2GAAAAABJRU5ErkJggg==' }}"
                            width="40" height="40" alt="user">
                    </a>
                    <div class="account-detail">
                        <a href="{{ Src::author($row) }}">
                            <h5 href="{{ Src::author($row) }}">{{ $row['news_editor'][0]['name'] ?? null }}</h5>
                        </a>
                        <span>{{ Util::date($row['news_date_publish'] ?? null, 'long_time') }}</span>
                    </div>
                </div>
                <div class="shared">
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current() . '?utm_source=Desktop&utm_medium=facebook&utm_campaign=Share_Top') }}"
                        target="_blank"><i class="icon icons--share icon--share-fb"></i></a>
                    <a href="https://twitter.com/intent/tweet?text={{ urlencode(url()->current() . '?utm_source=Desktop&utm_medium=twitter&utm_campaign=Share_Top') }}"
                        target="_blank"><i class="icon icons--share icon--share-tweet"></i></a>
                </div>
            </div>

            <div class="content-news mt-3">
                <figure>
                    <div class="item-vidio-inner"> {{-- !! GANTI CLASS NYA !! --}}
                        {!! htmlspecialchars_decode($row['news_video']['video'] ?? null) !!}
                        {{-- <script src="//static-web-prod-vidio.akamaized.net/assets/javascripts/vidio-embed.js"></script> --}}
                    </div>
                </figure>
                <figcaption>{{ $row['news_sub_title'] ?? null }}</figcaption>

                <div class="dt-paragraph">

                    {!! str_replace(
                        ['mce-mce-mce-mce-no/type', 'mce-no/type'],
                        '',
                        htmlspecialchars_decode($row['news_content'] ?? null),
                    ) !!}

                    @push('script')
                        <script>
                            if (document.getElementsByClassName('dt-paragraph')) {
                                //change tag br to tag p
                                if (document.getElementsByClassName('dt-paragraph')[0].getElementsByTagName('br')[0] != null) {
                                    document.getElementsByClassName('dt-paragraph')[0].innerHTML = document.getElementsByClassName(
                                        'dt-paragraph')[0].innerHTML.replace(/<br>\\*/g, '</p><p>')
                                }
                                //add ads
                                if (document.getElementsByClassName('dt-paragraph')[0].getElementsByTagName('p')[0] != null) {
                                    //get 2 paragraf before add ads
                                    var lis = document.getElementsByClassName('dt-paragraph')[0].getElementsByTagName('p')
                                    var counter = 0

                                    for (var i = 0; i < lis.length - 1; i++) {
                                        if (lis[i].innerHTML !== "") {
                                            counter++
                                            if (counter == 2) {
                                                document.getElementsByClassName('dt-paragraph')[0].getElementsByTagName('p')[i]
                                                    .insertAdjacentHTML('afterend',
                                                        '<div class="channel-ad channel-ad_ad-exposer">  {!! Util::getAds('exposer') !!} </div>');
                                                break
                                            }
                                        }
                                    }
                                }
                            }
                        </script>
                    @endpush
                    {{-- <p>Otosia.com Belum lama ini beredar sebuah foto yang diduga sebagai wujud Yamaha Nmax facelift. Tentu hal ini menggegerkan media sosial, terlebih para pecinta sepeda motor.</p>
                    <p>Foto tersebut diunggah oleh pemilik akun Facebook bernama <a href="#">Yachya Doank</a>. Pada gambar itu tampak Yamaha Nmax facelift sedang melakoni uji jalan di jalur Indramayu-Cirebon, Jawa Barat.</p>
                    <div class="dt-box dt-box--crosslink p-4">
                        <h1 class="dt-box-title text-16 font-bold mb-4">BACA JUGA:</h1>
                        <ul class="dt-box--crosslink-list text-12 font-bold flex flex-wrap list-none -mx-2">
                            <li class="dt-box--crosslink-list-item w-1/3 px-2"><a href="#">Honda BeAT Sudah Kekinian, Yamaha: Mio Tergantung Konsumen</a></li>
                            <li class="dt-box--crosslink-list-item w-1/3 px-2"><a href="#">Sepeda Motor Yamaha TMax 20th Anniversary</a></li>
                            <li class="dt-box--crosslink-list-item w-1/3 px-2"><a href="#">Yamaha Luncurkan XMax dan Aerox Edisi MAXI Signature</a></li>
                        </ul>
                    </div>
                    <p>Terlihat jelas bagian belakang Yamaha Nmax facelift dibekali lampu belakang baru. Secara detail tampak beberapa baris LED.</p> --}}
                </div>

                {{-- RELATED TAG --}}
                @include('defaultsite.desktop.components-ui.ui-related-tag')

                {{-- credit --}}
                @include('defaultsite.desktop.components-ui.ui-credit')

                {{-- SHARE NEWS --}}
                @include('defaultsite.desktop.components-ui.ui-share-news')

                <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-light report-btn"><i
                        class="fa-solid fa-triangle-exclamation" style="color: #ca0000"></i> Laporkan Artikel</button>

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

            </div>



        </div>
    </div>
@endsection
