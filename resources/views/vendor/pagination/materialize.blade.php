@if ($paginator->hasPages())
    <ul class="pagination center fs-5">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled"><a href="#!" style="text-decoration: none"><i
                        class="bi bi-chevron-left"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
        @else
            <li class="enabled"><a href="{{ $paginator->previousPageUrl() }}"><i
                        class="material-icons">chevron_left</i></a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active"><a href="#!" style="text-decoration: none">{{ $page }}
                                &nbsp;&nbsp;&nbsp;</a></li>
                    @else
                        <li><a href="{{ $url }}" style="text-decoration: none">{{ $page }}
                                &nbsp;&nbsp;&nbsp;</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="waves-effect"><a href="{{ $paginator->nextPageUrl() }}"><i class="bi bi-chevron"></i></a>
            </li>
        @else
            <li class="disabled"><a href="#!"><i class="material-icons">chevron_right</i></a>
            </li>
        @endif
    </ul>
@endif
