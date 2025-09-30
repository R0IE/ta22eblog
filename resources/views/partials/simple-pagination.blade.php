@if ($paginator->hasPages())
    <nav class="flex justify-center">
        <ul class="join">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li><span class="join-item btn btn-disabled" aria-disabled="true">@lang('pagination.previous')</span></li>
            @else
                <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="join-item btn">@lang('pagination.previous')</a></li>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li><a href="{{ $paginator->nextPageUrl() }}" rel="next" class="join-item btn">@lang('pagination.next')</a></li>
            @else
                <li><span class="join-item btn btn-disabled" aria-disabled="true">@lang('pagination.next')</span></li>
            @endif
        </ul>
    </nav>
@endif
