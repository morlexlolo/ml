<div class="container mx-auto px-32 border-t-2  border-gray-700 opacity-80">
    @unless($breadcrumbs->isEmpty())
        <ul
            class="flex mt-4 text-gray-400 border-gray-700 w-32 items-center font-light capitalize tracking-widest lg:text-base">
            @foreach ($breadcrumbs as $breadcrumb)
                @if (!is_null($breadcrumb->url) && !$loop->last)
                    <li class="inline-flex items-center">
                        <a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}
                        </a>

                        <svg class="fill-current h-5 w-6 text-gray-400" viewBox="0 0 24 24">
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path
                                d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z">
                            </path>
                        </svg>
                    </li>
                @else
                    <li class="">
                        <a href="#" class="text-red-500 hover:text-red-400 border-none"> {{ $breadcrumb->title }}</a>
                    </li>
                @endif

            @endforeach
        </ul>

    @endunless
</div>
