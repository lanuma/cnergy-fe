@if ($trendingTag=collect(\Data::trendingTag())->slice(0, 4)??null)
    @if( count($trendingTag) !== 0 )
    <div class="related-tag-container">
          @foreach ($trendingTag as $tag)
              <a href="{{ Src::detailTag($tag) }}">{{$tag['title']}}</a>
          @endforeach
      </div>
    @endif
@endif