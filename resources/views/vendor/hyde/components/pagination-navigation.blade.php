@php /** @var \Hyde\Support\Paginator $paginator */ @endphp

<nav aria-label="Page navigation example" class="w-full pt-5 border-t flex justify-center">
    <ul class="inline-flex -space-x-px text-sm">

        <li>

        @if($paginator->previous())
                <a href="{{ $paginator->previous()  }}" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">&#8249;</a>
        @else
            <span class="flex items-center justify-center px-3 h-8 ms-0 leading-tight border border-e-0 border-gray-300 rounded-s-lg bg-gray-100 text-gray-700 dark:text-gray-400 dark:bg-gray-700 cursor-not-allowed">&#8249;</span>
        @endif
        </li>




{{--        <li>--}}
{{--            <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>--}}
{{--        </li>--}}



        @foreach($paginator->getPageLinks() as $pageNumber => $destination)
            <li>

            @if($paginator->currentPage() === $pageNumber)
                <span aria-current="page" class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white cursor-not-allowed">{{ $pageNumber }}</span>
            @else
                <a href="{{ $destination }}" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    {{ $pageNumber }}
                </a>
            @endif
            </li>

        @endforeach

{{--        <li>--}}
{{--            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>--}}
{{--        </li>--}}

        <li>
        @if($paginator->next())
                <a href="{{ $paginator->next()  }}" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">&#8250;</a>

        @else
            <span class="flex items-center justify-center px-3 h-8 leading-tight  border border-gray-300 rounded-e-lg bg-gray-100 text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 cursor-not-allowed">&#8250;</span>
        @endif
        </li>

{{--        <li>--}}
{{--            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>--}}
{{--        </li>--}}
    </ul>
</nav>

{{--<nav class="flex justify-center mt-4">--}}
{{--    @if($paginator->previous())--}}
{{--        <x-link :href="$paginator->previous()">&#8249;</x-link>--}}
{{--    @else--}}
{{--        <span class="opacity-75">&#8249;</span>--}}
{{--    @endif--}}

{{--    <div class="px-2">--}}
{{--        @foreach($paginator->getPageLinks() as $pageNumber => $destination)--}}
{{--            @if($paginator->currentPage() === $pageNumber)--}}
{{--                <strong>{{ $pageNumber }}</strong>--}}
{{--            @else--}}
{{--                <x-link :href="$destination">{{ $pageNumber }}</x-link>--}}
{{--            @endif--}}
{{--        @endforeach--}}
{{--    </div>--}}

{{--    @if($paginator->next())--}}
{{--        <x-link :href="$paginator->next()">&#8250;</x-link>--}}
{{--    @else--}}
{{--        <span class="opacity-75">&#8250;</span>--}}
{{--    @endif--}}
{{--</nav>--}}