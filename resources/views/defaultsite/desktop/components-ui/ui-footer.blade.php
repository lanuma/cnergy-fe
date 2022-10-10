<div class="footer-container">
    <a href="/" class="m-auto mb-4"><img src="{{ URL::asset('assets/images/logo.webp') }}" alt="logo"
            width="168px" height="34px"></a>
    <div class="first-link-footer mt-3 d-flex flex-row justify-content-center">
        @if ($footer_menu = Data::menu(position: 'footer') ?? null)
            <ul>
                @if ($footer_menu != null || count($footer_menu > 0))
                    @foreach ($footer_menu as $l)
                        <li><a href="{{ $l['url'] }}">{{ $l['title'] }}</a></li>
                    @endforeach
                @endif
            </ul>
        @endif
    </div>
    <p class="special-font-lato mt-5" style="color: #999999; font-size: 12px;">{!! nl2br(config('site.attributes.address')) !!}</p>
    <div class="social-media-container mt-3">
        <ul>
            @php $socmed = json_decode(config('site.attributes.sosmed', '{}')) @endphp
            @if ($socmed->fb ?? null)
                <li><a href="{{ $socmed->fb }}" style="background-color: #4a6db4" aria-label="facebook"><i
                            class="fa-brands fa-facebook-f"></i></a></li>
            @endif
            @if ($socmed->twitter ?? null)
                <li><a href="{{ $socmed->twitter }}" style="background-color: #1dadeb" aria-label="twitter"><i
                            class="fa-brands fa-twitter"></i></a></li>
            @endif
            @if ($socmed->youtube ?? null)
                <li><a href="{{ $socmed->youtube }}" style="background-color: #fe0000" aria-label="youtube"><i
                            class="fa-brands fa-youtube"></i></a></li>
            @endif
            @if ($socmed->ig ?? null)
                <li><a href="{{ $socmed->ig }}" style="background-color: #f10073" aria-label="instagram"><i
                            class="fa-brands fa-instagram"></i></a></li>
            @endif
        </ul>
    </div>

    <div class="copyright">
        <p>Copyright &copy; {{ date('Y') }} {{ config('site.attributes.title') }} KLY KapanLagi Youniverse All
            Rights Reserved</p>
    </div>
</div>
