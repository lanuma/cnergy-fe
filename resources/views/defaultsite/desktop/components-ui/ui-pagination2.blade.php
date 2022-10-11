@isset($current_page, $last_page)
    @if ($last_page > 1)
        @if ($pagination = Util::pagination($current_page, $last_page) ?? null)
            <div class="pagination-container2">
                <ul class="paginationlist">
                    <span>Page</span>
                    @foreach ($pagination['list'] as $p)
                        @if ($pagination['current_page'] == $p['page'])
                            <li class="paginationlist-item active"><a
                                    href="/{{ $slug }}/page-{{ $p['page'] }}">{{ $p['page'] }}</a></li>
                        @else
                            <li class="paginationlist-item"><a
                                    href="/{{ $slug }}/page-{{ $p['page'] }}">{{ $p['page'] }}</a></li>
                        @endif
                    @endforeach
                </ul>
            </div>
        @endif
    @endif
@endisset
