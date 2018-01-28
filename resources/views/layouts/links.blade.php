@if ($paginator->hasPages())
<div class="tg-pagination">
    <ul>
        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li><span><a href="">{{ $element }}</a></span></li>
            @endif
            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    <li class="{{ $page == $paginator->currentPage() ? 'tg-active' : ''  }}"><a href="{{ $url }}">{{ $page }}</a></li>
                @endforeach
            @endif
        @endforeach
    </ul>
</div>
@endif