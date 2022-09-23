<div class="slider-container">
    @if (count($hl) > 0)
    <div style="display: flex">
        <h4>{{ $title }}</h4>
        <img class="silder-vector" src="{{ URL::asset('assets/images/vector-red.svg') }}" /> 
    </div>
      
      <div class="slider-content">
        @foreach ($hl as $s)
        <div class="slider-news">
          <a href="{{ Src::detail($s) }}" aria-label="{{ $s[0]['news_title'] ?? null }}"> 
            <figure>
              <div class="image-news">
                @include('image', [
                  'source' => $s,
                  'force' => '190x190',
                  'size' => '190x190',
                  $s['news_title'] ?? null,
              ])
              </div>
              <figcaption>{{ $s['news_title'] }}</figcaption>
            </figure>
          </a>
        </div>
       @endforeach
      </div>
    @endif
    </div>