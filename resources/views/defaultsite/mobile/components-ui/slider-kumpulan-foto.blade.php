<div class="swiper-wrapper">
  @if (count($row['photonews']??[])>0)
    <div class="header-photo">
        <h3 class="photo-t">{{ $row['news_title'] ?? null }}</h3>
        <p class="photo-author pt-2">Oleh  <a style="color: #CA0000 ; margin:0px 5px;"  href="#">{{$row['news_editor'][0]['name']??null}}</a> {{ Util::date($row['news_date_publish'] ?? null, 'long_time') }}</p>
      <p class="photo-synopsis pt-5 pb-4">{{$row['news_synopsis']??null}}</p>       
    </div>
      <div class="slider-content">
        @foreach ($row['photonews'] as $s)
        <div class="swiper-slide">
          <a href="{{ Src::detail($s) }}" aria-label="{{ $s[0]['news_title'] ?? null }}"> 
            <figure class="item">
              <div class="item-img aspect-[9/5]>
                @include('image', [
                  'source' => $s,
                  'force' => '426x238',
                  'size' => '426x238',
                  $s['news_title'] ?? null,
              ])
              </div>
            </figure>
          </a>
        </div>
       @endforeach
      </div>
    @endif
    </div>


    {{-- kly --}}
{{-- <div id="pages-intro" class="dt-body-pages-item">
    <div class="dt-paragraph">
        <p>{{$row['news_synopsis']??null}}</p>
    </div>
    <div class="dt-photo -mx-4">
        <div class="swiper mb-6">
            <div class="swiper-wrapper">
                @if (count($row['photonews']??[])>0))
                @foreach ($row['photonews'] as $r)
                    <div class="swiper-slide">
                        <a href="{{ Src::detail($r) }}">
                            <figure class="item">
                                <span class="item-img aspect-[9/5]">
                                    @include('image', ['source'=>$r, 'size'=>'375x208', $r['news_title']??null])
                                </span>
                            </figure>
                        </a>
                    </div>
                @endforeach
                @endif
            </div> --}}
            {{-- <span class="dt-photo-desc px-4 py-2 text-12 text-white">Spyshot Yamaha Nmax facelift (Facebook.com/ Yachya Doank)</p>
            </span> --}}
            {{-- <div class="swiper-pagination p-4 text-16"></div>
        </div>
    </div> --}}
    {{-- end-kly --}}