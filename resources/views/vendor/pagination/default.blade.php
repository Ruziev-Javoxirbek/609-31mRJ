@if ($paginator->hasPages())
    <div style="margin-bottom: 20px; margin-top: 20px;" >
        <form action="{{ url()->current() }}" method="GET">
            <select name="perpage" onchange="this.form.submit()">
                <option value="2" {{ request('perpage') == 2 ? 'selected' : '' }}>2 на страницу</option>
                <option value="4" {{ request('perpage') == 4 ? 'selected' : '' }}>4 на страницу</option>
                <option value="5" {{ request('perpage') == 5 ? 'selected' : '' }}>5 на страницу</option>
                <option value="8" {{ request('perpage') == 8 ? 'selected' : '' }}>8 на страницу</option>
                <option value="11" {{ request('perpage') == 11 ? 'selected' : '' }}>11 на страницу</option>
            </select>
        </form>
    </div>

    <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span aria-hidden="true">&lsaquo;</span>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li>
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
                            <li class="active" aria-current="page"><span>{{ $page }}</span></li>
                        @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
            @else
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span aria-hidden="true">&rsaquo;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
