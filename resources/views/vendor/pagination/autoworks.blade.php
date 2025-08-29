@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-center">
        <ul class="flex items-center space-x-2 gap-x-2">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="px-1">
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-700/40 text-gray-400 cursor-default select-none">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    </span>
                </li>
            @else
                <li class="px-1">
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="inline-flex items-center justify-center w-10 h-10 rounded-full text-black hover:bg-yellow-400 hover:text-gray-900 transition px-4 py-2 border border-black" aria-label="Previous">
                        Prev
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="px-1">
                        <span class="inline-flex items-center justify-center w-10 h-10 text-gray-400">{{ $element }}</span>
                    </li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="px-1">
                                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full font-semibold px-4 py-2" style="background:#FDC30F;color:#181818">{{ $page }}</span>
                            </li>
                        @else
                            <li class="px-1">
                                <a href="{{ $url }}" class="inline-flex items-center justify-center w-10 h-10 rounded-full text-black hover:bg-yellow-400 hover:text-gray-900 transition px-4 py-2 border border-black" aria-label="Go to page {{ $page }}">
                                    {{ $page }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="px-1">
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="inline-flex items-center justify-center w-10 h-10 rounded-full text-black hover:bg-yellow-400 hover:text-gray-900 transition px-4 py-2 border border-black" aria-label="Next">
                       Next
                    </a>
                </li>
            @else
                <li class="px-1">
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-700/40 text-gray-400 cursor-default select-none">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </span>
                </li>
            @endif
        </ul>
    </nav>
@endif

