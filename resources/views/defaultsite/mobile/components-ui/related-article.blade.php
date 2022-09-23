<div class="artikel-terkait-container">
  <h4>artikel terkait</h4>
@foreach ($ra as $item)
    <a href="{{ Src::detail($item) }}" aria-label="{{ $item[0]['news_title'] ?? null }}">
    <figure>
      <div class="image-news">
          @include('image', [
            'source' => $item,
            'force' => '60x60',
            'size' => '60x60',
            $item['news_title'] ?? null,
        ])
      </div>
      <figcaption>
        <h2 class="item-desc-title font-bold"><a href="{{Src::detail($item)}}">{{$item['news_title']??null}}</a></h2></figcaption>
    </figure>
  </a>
@endforeach
</div>