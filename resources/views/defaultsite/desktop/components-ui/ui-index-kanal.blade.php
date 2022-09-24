@if ($listCategory = \Data::listCategory() ?? null)
    @if (count($listCategory) > 0)
        <div class="index-kanal-container">
            <h4>index kanal</h4>
            <div class="index-kanal-content">
                @foreach ($listCategory as $item)
                    <a href="{{ Src::detail($item) }}" aria-label="{{ $item['news_title'] ?? null }}">
                        <span>{{ $item['name'] }}</span>
                        <span>></span>
                    </a>
                @endforeach
            </div>
        </div>
    @endif
@endif
