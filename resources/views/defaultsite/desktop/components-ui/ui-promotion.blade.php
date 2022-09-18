<div class="promotion-product-container d-flex justify-content-between">
    <div class="promotion-card">
      <img src="{{ URL::asset('assets/images/bintang.webp') }}" width="120px" height="25px">
      <a href="#">
        <figure>
          <img src="{{ $pr[4]['news_image']['real'] }}" width="100%" height="115px">
          <figcaption>
            <span>{{$pr[4]['category_name']}}</span>
            <p>{{ $pr[4]['news_synopsis'] }}</p>
          </figcaption>
        </figure>
      </a>
    </div>
    <div class="promotion-card">
        <img src="{{ URL::asset('assets/images/bola.webp') }}" width="120px" height="25px">
        <a href="#">
          <figure>
            <img src="{{ $pr[5]['news_image']['real'] }}" width="100%" height="115px">
            <figcaption>
              <span>{{$pr[5]['category_name']}}</span>
              <p>{{ $pr[5]['news_synopsis'] }}</p>
            </figcaption>
          </figure>
        </a>
      </div>
      <div class="promotion-card">
        <img src="{{ URL::asset('assets/images/klik-dokter.webp') }}" width="120px" height="25px">
        <a href="#">
          <figure>
            <img src="{{ $pr[6]['news_image']['real'] }}" width="100%" height="115px">
            <figcaption>
              <span>{{$pr[6]['category_name']}}</span>
              <p>{{ $pr[6]['news_synopsis'] }}</p>
            </figcaption>
          </figure>
        </a>
      </div>
   
   
 
  </div>