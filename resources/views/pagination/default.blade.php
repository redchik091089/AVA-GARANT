@if ($paginator->hasPages())
    <ul class="pagination" style="font-size: 40px;">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled" style="padding: 20px"><span>&laquo;</span></li>
        @else
            <li style="padding: 20px"><a href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled" style="padding: 20px"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active" style="padding: 20px"><span>{{ $page }}</span></li>
                    @else
                        <li style="padding: 20px"><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li style="padding: 20px"><a href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></li>
        @else
            <li class="disabled" style="padding: 20px"><span>&raquo;</span></li>
        @endif
    </ul>
@endif
