<div>
   <div class="flex justify-between items-center pb-8 ">
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
                        Slug
                    </th>
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
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$pro->name}}
                    </th>
                    <td class="py-4 px-6">
                        {{$pro->slug}}
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
                    <td class="py-4 px-6 ">
                        <span @class(['border-2 font-bold py-2 px-3 rounded-lg text-xs', 'border-green-600 text-green-700' => $pro->status == 1 ,'border-red-600 text-red-700' => $pro->status == 0])>
                            {{ $pro->status == 1 ? "Active" : "Draft" }}
                        </span>
                    </td>
                    <td class="py-4 px-6 space-x-2 flex flex-nowrap">
                        <a href="{{ route('admin.product.edit',$pro->slug) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                            >Edit</a>
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


</div>
