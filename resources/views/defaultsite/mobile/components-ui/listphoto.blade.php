@if( $rows )
    @foreach( $rows as $r )
        @if ($loop->index==0)
            @if (($page??null)=='homepage')
                @if (($data??null)=='latest')
                    {{-- <div class="channel-ad channel-ad_ad-sc-2">
                        {!! Util::getAds('showcase-2') !!}
                    </div> --}}
                @endif
            @endif
        @endif
        <article id="{{$r['news_id']}}" class="articles articles--galeri">
            <figure class="item item--galeri">
                <a href="{{ Src::detail($r) }}" aria-label="{{ $r[0]['news_title'] ?? null }}">
                    <div class="image-news">
                        @include('image', [
                          'source' => $r,
                          'force' => '375x208',
                          'size' => '375x208',
                          $r['news_title'] ?? null,
                      ])
                    <span class="item-img-info">
                        <span class="item-img-data" >{{ count($r['photonews']??[])!=0?count($r['photonews']):($r['photonews_count']??0) }}</span>
                    </span>
                </a>
                <figcaption>
                    <div class="d-flex"> <a class="text-category" href="{{ Src::category($r) }}">{{ $r['category_name'] ?? (last($r['news_category'])['name'] ?? '') }}
                    </a>
                    <span class="item-desc-time">{{ Util::date(date('Y-M-d H:i:s', strtotime($r['news_date_publish'])), 'short') }}</span> </div>
                   
                    <h2 class="item-desc-title font-bold"><a  href="{{Src::detail($r)}}" >{{$r['news_title']??null}}</a></h2>
                </figcaption>
            </figure>
        </article>
        @if ($loop->index==3)
            @if (($page??null)=='homepage')
                @if (($data??null)=='popular')
                    <div class="channel-ad channel-ad_ad-exposer ">
                        {!! Util::getAds('exposer') !!}
                    </div>
                @endif
            @endif
        @endif
        
    @endforeach
@endif