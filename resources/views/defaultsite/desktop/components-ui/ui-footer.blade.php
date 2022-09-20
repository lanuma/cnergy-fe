<div class="footer-container">
  
  <a href="/" class="m-auto mb-4" style="background-image: url({{ Src::imgNewsCdn(config('site.attributes'), '320x', 'webp', 'file_logo') }});"><img src="{{ URL::asset('assets/images/logo.webp') }}" alt="logo" width="168px" height="34px"></a>
  <div class="first-link-footer mt-3 d-flex flex-row justify-content-center">
    @if ($footer_menu = Data::menu(position: 'footer') ?? null)
      <ul>
          @if ($footer_menu != null || count($footer_menu > 0))
          @foreach ($footer_menu as $l)
          <li><a href="{{$l['url']}}">{{$l['title']}}</a></li>
          @endforeach
          @endif
      </ul>
    @endif
    
  </div>

  <p class="special-font-lato mt-5" style="color: #999999; font-size: 12px;">{!! nl2br( config('site.attributes.address') ) !!}</p>

  <div class="social-media-container mt-3">
    <ul>
      @if( $socmed->fb ?? null )<li><a href="{{$socmed->fb}}" aria-label="facebook"><i class="icon icon--facebook"></i></a></li>@endif
      @if( $socmed->twitter ?? null )<li><a href="{{$socmed->twitter}}" aria-label="twitter"><i class="icon icon--twitter"></i></a></li>@endif
      @if( $socmed->vidio ?? null )<li><a href="{{$socmed->vidio}}" aria-label="vidio"><i class="icon icon--vidio"></i></a></li>@endif
      @if( $socmed->youtube ?? null )<li><a href="{{$socmed->youtube}}" aria-label="youtube"><i class="icon icon--youtube"></i></a></li>@endif
      @if( $socmed->ig ?? null )<li><a href="{{$socmed->ig}}" aria-label="instagram"><i class="icon icon--instagram"></i></a></li>@endif
    </ul>
  </div>

  <div class="copyright">
    <p>Copyright &copy; {{date("Y")}} {{ config('site.attributes.title') }} KLY KapanLagi Youniverse All Rights Reserved</p>
  </div>
</div>