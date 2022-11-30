<div>
    <div class="flex justify-between items-center pb-8 ">
        <div class="flex gap-x-4 items-center">
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input wire:model="search" type="search" id="table-search"
                    class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-white rounded-lg focus:ring-0 border border-gray-300  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white placeholder:text-xs"
                    placeholder="Search by product name..">
            </div>

            <div>
                <div>
                    <button id="dropdownActionButton" data-dropdown-toggle="dropdownAction"
                        class="inline-flex items-center tracking-wide text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                        type="button">
                        <span class="sr-only">Action button</span>
                        Sort By
                        <svg class="ml-2 w-3 h-3" aria-hidden="true" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownAction"
                        class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownActionButton">
                            <li>
                                <span
                                    class="block py-2 px-4 hover:cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Recently added</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <a href="{{ route('admin.product.create') }}"
                class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                <span
                    class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                    Add
                    Product
                </span>
            </a>
        </div>
    </div>


    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Category
                    </th>
                    {{-- <th scope="col" class="py-3 px-6">
                        Slug
                    </th> --}}
                    <th scope="col" class="py-3 px-6">
                        Description
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Price
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Quantity
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Colors
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Status
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody wire:loading.remove wire:target="search">
                @foreach ($products as $pro)
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 leading-7">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$pro->name}}
                    </th>
                    {{-- <td class="py-4 px-6">
                        {{$pro->slug}}
                    </td> --}}
                    <td class="py-4 px-6">
                        {{$pro->category->name}}
                    </td>
                    <td class="py-4 px-6">
                        {{$pro->description}}
                    </td>
                    <td class="py-4 px-6">
                        {{$pro->price}}
                    </td>
                    <td class="py-4 px-6">
                        {{$pro->quantity}}
                    </td>
                    <td class="py-4 px-6">
                        <div class="space-x-1 ">
                            @foreach ($pro->colors as $color)
                            <span>{{ $color->name }}</span>
                            @endforeach
                        </div>
                    </td>
                    <td class="py-4 px-6 ">
                        <span @class(['border-2 font-bold py-2 px-3 rounded-lg
                            text-xs', 'border-green-600 text-green-700'=> $pro->status == 1 ,'border-red-600
                            text-red-700' => $pro->status == 0])>
                            {{ $pro->status == 1 ? "Active" : "Draft" }}
                        </span>
                    </td>
                    <td class="py-4 px-6 space-x-2 flex flex-nowrap">
                        <a href="{{ route('admin.product.edit',$pro->slug) }}"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        <button type="button" class="font-medium text-red-600 dark:text-red-500 hover:underline"
                            wire:click="deleteModal({{ $pro }})">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <x-svgs.spinner wire:loading wire:target="search" />
    </div>

    <div class="pt-6">
        {{ $products->links() }}
    </div>


    {{-- delete category modal  --}}
    @if ($showDeleteModal)

    <div wire:click.self="$toggle('showDeleteModal')"
        class="bg-black/30 overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 p-4 w-full md:inset-0 h-modal md:h-full justify-center items-center flex">
        <div class="relative w-full max-w-md h-full md:h-auto">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button wire:click="$toggle('showDeleteModal')" type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-6 text-center">
                    <svg aria-hidden="true" class="mx-auto mb-4 w-14 h-14 text-gray-400 dark:text-gray-200" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to
                        delete this category?</h3>
                    <button wire:click="delete" type="button"
                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                        Yes, I'm sure
                    </button>
                    <button wire:click="$toggle('showDeleteModal')" type="button"
                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No,
                        cancel</button>
                </div>
            </div>
        </div>
    </div>

    @endif

</div>
