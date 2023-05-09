<ul id='test' class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
    @php
        $categories = App\Models\Category::all()->filter(function ($cat) {
            return $cat->status == 1;
        });
    @endphp
    @if ($categories)
        @foreach ($categories as $cat)
            <li>
                <a href="{{ url('/products?cat=' . $cat->name) }}"
                    class="flex items-center py-3 px-5 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">
                    <x-svgs.nav.clothes
                        class="mr-2 w-5 h-5 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" />
                    {{ $cat->name }}
                </a>
            </li>
        @endforeach
    @endif

    <li>
        <a href="{{ url('/products') }}"
            class="flex items-center py-3 px-5 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">
            <x-svgs.nav.clothes
                class="mr-2 w-5 h-5 text-gray-400 dark:text-gray-500 group-hover:text-blue-600 dark:group-hover:text-blue-500" />
            Shop All
        </a>
    </li>
</ul>
