<div class="artikel-terkait-container">
  <h4>artikel terkait</h4>
@foreach ($row as $item)
    <a href="{{ Src::detail($item) }}" aria-label="{{ $item['news_title'] ?? null }}">
    <figure>
      <div class="image-news">
        @include('image', [
          'source' => $item,
          'force' => '168x34',
          'size' => '168x34',
          $s['news_title'] ?? null,
      ])    
      </div>
      <figcaption>
        <h2 class="item-desc-title font-bold"><a href="{{Src::detail($item)}}">{{$item['news_title']??null}}</a></h2></figcaption>
    </figure>
  </a>
@endforeach
   

 
</div>