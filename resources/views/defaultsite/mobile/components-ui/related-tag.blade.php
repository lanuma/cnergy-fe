@if ($row['news_tag'] ?? null)
    <div class="related-tag-container">
        @foreach ($row['news_tag'] as $r)
              <a href="{{ Src::detailTag($r) }}">{{ $r['tag_name'] ?? null }}</a>
        @endforeach
        <a href="#">More Tag</a>
      </div>
@endif