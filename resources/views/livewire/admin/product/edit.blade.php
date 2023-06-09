@push('scripts')
    <script>
        function preventEnterKey() {
            $('form input').keydown(function(e) {
                if (e.keyCode == 13) {
                    e.preventDefault();
                    return false;
                }
            });
        }
        preventEnterKey();
        window.addEventListener("contentChanged", (event) => {
            preventEnterKey();
        });
    </script>
@endpush
<div>
    <form wire:submit.prevent="submit" class="pb-24 ml-4">


        <ol class="relative border-l border-gray-200 dark:border-gray-700 pb-8">
            <li class="mb-10 ml-6">
                <span
                    class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-200 rounded-full ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                    <svg aria-hidden="true" class="w-3 h-3 text-blue-600 dark:text-blue-400" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                            clip-rule="evenodd"></path>
                    </svg>
                </span>
                <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Base Product Data</h3>
                <span class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500 pb-4">Add the
                    product base data </span>

                <div>
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" wire:model="name" id="name"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " />
                        @error('name')
                            <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">Oh,
                                    snapp!</span> {{ $message }}.</p>
                        @enderror
                        <label for="name"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Product
                            Name</label>
                    </div>

                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" wire:model="description" id="description"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " />
                        @error('description')
                            <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">Oh,
                                    snapp!</span> {{ $message }}.</p>
                        @enderror
                        <label for="description"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Description</label>
                    </div>

                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 mb-6 w-full group">
                            <label for="categoryId" class="sr-only">select</label>
                            <select id="categoryId" wire:model="categoryId"
                                class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                                <option>Choose Category</option>

                                @foreach ($categories as $cat)
                                    <option value="{{ $cat->id }}" @selected($categoryId == $cat->id)>{{ $cat->name }}
                                    </option>
                                @endforeach

                            </select>
                            @error('categoryId')
                                <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">Oh,
                                        snapp!</span> {{ $message }}.</p>
                            @enderror
                        </div>

                        {{-- <div class="relative z-0 mb-6 w-full group">
                            <input type="text" wire:model ="slug" id="slug"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " />
                            @error('slug')
                            <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">Oh,
                                    snapp!</span> {{ $message }}.</p>
                            @enderror
                            <label for="slug"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Slug</label>
                        </div> --}}
                        @if (!$variantsState)
                            <div class="flex flex-row justify-between gap-12">
                                <div class="relative z-0 mb-6 w-full group ">

                                    <input type="number" step="0.01" wire:model="price" id="price"
                                        min="0"
                                        class=" @if ($on_sale) line-through @endif block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        placeholder=" " />
                                    @error('price')
                                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">Oh,
                                                snapp!</span> {{ $message }}.</p>
                                    @enderror
                                    <label for="price"
                                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Price</label>


                                </div>
                                @if ($on_sale)
                                    <div class="relative z-0 mb-6 w-full group ">
                                        <input type="number" step="0.01" wire:model="on_sale_price"
                                            id="on_sale_price" min="0"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                            placeholder=" " />

                                        @error('on_sale_price')
                                            <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span
                                                    class="font-medium">Oh,
                                                    snapp!</span> {{ $message }}.</p>
                                        @enderror

                                        <label for="on_sale_price"
                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Price</label>
                                    </div>
                                @endif
                            </div>

                            <div class="relative z-0 mb-6 w-full group">
                                <input type="number" wire:model="quantity" min="0" id="quantity"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " />
                                @error('quantity')
                                    <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">Oh,
                                            snapp!</span> {{ $message }}.</p>
                                @enderror
                                <label for="quantity"
                                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Quantity</label>
                            </div>
                        @endif
                        <div class="relative z-0 mb-6 w-full group">

                            <label for="status" class="sr-only">select</label>
                            <select id="status" wire:model="status"
                                class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">

                                <option selected>Choose Status</option>
                                <option value="Active" @selected($status == 'Active')>Active</option>
                                <option value="Draft" @selected($status == 'Draft')>Draft</option>

                            </select>
                            @error('status')
                                <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">Oh,
                                        snapp!</span> {{ $message }}.</p>
                            @enderror
                        </div>

                        @if (!$variantsState)
                            <div class="py-4">
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" wire:model="on_sale" class="sr-only peer">
                                    <div
                                        class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                                    </div>
                                    <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">On
                                        Sale</span>
                                </label>
                            </div>
                        @endif

                    </div>

                    <div class="py-4">
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" wire:model="is_hot" class="sr-only peer">
                            <div
                                class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                            </div>
                            <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Select Product as
                                HOT</span>
                        </label>
                    </div>

                    <div class="relative z-0 mb-6 w-full group">

                        <label class="inline-flex relative items-center cursor-pointer"
                            wire:click="$toggle('variantsState')">
                            <input type="checkbox" wire:model="variantsState" class="sr-only peer">
                            <div
                                class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                            </div>
                            <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Variants</span>
                        </label>

                        @if ($variantsState)
                            <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                    <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="py-3 px-6 bg-gray-50 dark:bg-gray-800">
                                                Option Name
                                            </th>
                                            <th scope="col" class="py-3 px-6">
                                                Option Values
                                            </th>
                                            <th scope="col" class="py-3 px-6">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($optionsCount as $i)
                                            <tr class="border-b border-gray-200 dark:border-gray-700"
                                                data-option-id="{{ $i }}">
                                                <td scope="row"
                                                    class="py-2 px-6 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                                    <div class="">
                                                        {{-- add option name  --}}
                                                        <input type="text"
                                                            wire:model="optionName.{{ $i }}"
                                                            class="capitalize bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        @error('optionName.*')
                                                            <span class="error">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </td>
                                                <td class="py-2 px-6">
                                                    <div
                                                        class="flex flex-wrap gap-3  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                                                        {{-- single option values  --}}
                                                        {{-- @if (isset($optionName[$i])) --}}
                                                        @if (isset($optionValuesArray[$i]))
                                                            @foreach ($optionValuesArray[$i] as $optionValue)
                                                                <div
                                                                    class="inline space-x-px px-2 py-1 rounded-md bg-slate-500 text-white whitespace-nowrap">
                                                                    <span>{{ $optionValue }}</span>
                                                                    <span class="hover:cursor-pointer"
                                                                        wire:click="DeleteOptionValue({{ $loop->index }},{{ $i }})">X</span>
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                        {{-- @endif --}}

                                                        <div>
                                                            {{-- add option value  --}}
                                                            <input type="text"
                                                                wire:model="optionValue.{{ $i }}"
                                                                wire:keydown.enter="addAttr({{ $i }})"
                                                                class="uppercase h-[22px] min-w-[4rem] inline bg-gray-50 w-full focus:border-0 border-0 focus-visible:outline-0 focus-visible:ring-0 ">
                                                        </div>

                                                    </div>
                                                </td>
                                                <td class="py-2 px-6">
                                                    @php
                                                        if (isset($optionName[$i])) {
                                                            $name = $optionName[$i];
                                                        }
                                                    @endphp
                                                    <div wire:click="deleteOption({{ $i }})"
                                                        class="text-red-500 hover:bg-red-100 hover:cursor-pointer inline-block box-content px-2 py-2 rounded-full">
                                                        <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div
                                    class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                                    <button type="button" wire:click="addNewOption"
                                        class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">New
                                        Option</button>
                                </div>


                                @if (isset($optionMatrix) && count($optionValuesArray))
                                    <div class="overflow-x-auto relative">
                                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                            <thead
                                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                                <tr>
                                                    <th scope="col" class="py-3 px-6">
                                                        Option
                                                    </th>
                                                    <th scope="col" class="py-3 px-6">
                                                        Price
                                                    </th>
                                                    <th scope="col" class="py-3 px-6">
                                                        Quantity
                                                    </th>
                                                    <th scope="col" class="py-3 px-6">
                                                        Sku
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($optionMatrix as $key => $options)
                                                    <tr
                                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                        <th scope="row"
                                                            class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            @foreach ($options as $option)
                                                                {{ $option }}

                                                                @if ($loop->remaining > 0)
                                                                    \
                                                                @endif
                                                            @endforeach
                                                        </th>
                                                        <td class="py-4 px-6">
                                                            <div>
                                                                <input type="number" step="0.01"
                                                                    wire:model="optionPrices.{{ $key }}"
                                                                    min="0"
                                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                            </div>
                                                        </td>
                                                        <td class="py-4 px-6">
                                                            <input type="number"
                                                                wire:model="optionQuantities.{{ $key }}"
                                                                min="0"
                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        </td>
                                                        <td class="py-4 px-6">
                                                            <input type="text"
                                                                wire:model="skus.{{ $key }}"
                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                @endif

                            </div>
                        @endif

                    </div>
                </div>
            </li>
            <li class="mb-10 ml-6">
                <span
                    class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-200 rounded-full ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                    <svg aria-hidden="true" class="w-3 h-3 text-blue-600 dark:text-blue-400" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                            clip-rule="evenodd"></path>
                    </svg>
                </span>
                <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">SEO Tags <span
                        class="text-sm font-normal leading-none text-gray-400 dark:text-gray-500 align-top">(*optional)</span>
                </h3>
                <span
                    class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500 pb-4">Optional
                    SEO meta data</span>

                <div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="text" wire:model="meta_title" id="meta_title"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " />
                            @error('meta_title')
                                <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">Oh,
                                        snapp!</span> {{ $message }}.</p>
                            @enderror
                            <label for="meta_title"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Meta
                                Title</label>
                        </div>

                        <div class="relative z-0 mb-6 w-full group">
                            <input type="text" wire:model="meta_keyword" id="meta_keyword"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " />
                            @error('meta_keyword')
                                <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">Oh,
                                        snapp!</span> {{ $message }}.</p>
                            @enderror
                            <label for="meta_keyword"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Meta
                                keyword</label>
                        </div>
                    </div>

                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" wire:model="meta_description" id="meta_description"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " />
                        @error('meta_description')
                            <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">Oh,
                                    snapp!</span> {{ $message }}.</p>
                        @enderror
                        <label for="meta_description"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            Meta Description</label>
                    </div>
                </div>
            </li>
            <li class="ml-6">
                <span
                    class="flex absolute -left-3 justify-center items-center w-6 h-6 bg-blue-200 rounded-full ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                    <svg aria-hidden="true" class="w-3 h-3 text-blue-600 dark:text-blue-400" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                            clip-rule="evenodd"></path>
                    </svg>
                </span>
                <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Product Images</h3>
                <span class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Add the
                    product images</span>
                <div wire:loading wire:target="images">Uploading...</div>

                <ul id="sortable" class="flex justify-start items-start gap-x-2 py-4">
                    @if ($images)
                        @foreach ($images as $image)
                            <li class="ui-state-default relative">
                                @if (gettype($image) != 'string')
                                    <img src="{{ $image->temporaryUrl() }}" width="100" height="100">
                                @else
                                    <img src="{{ asset('/storage/' . $image) }}" width="100" height="100">
                                @endif
                                @if ($loop->iteration == 1)
                                    <span
                                        class="thumbnail absolute bottom-0 left-0 w-full py-2 bg-black/40 text-center text-white font-bold text-sm">First
                                        Thumbnail</span>
                                @elseif($loop->iteration == 2)
                                    <span
                                        class="thumbnail absolute bottom-0 left-0 w-full py-2 bg-black/40 text-center text-white font-bold text-sm">Second
                                        Thumbnail</span>
                                @endif
                            </li>
                        @endforeach
                    @endif
                </ul>

                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="default_size">Upload
                    Product Images</label>

                <div x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true"
                    x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false"
                    x-on:livewire-upload-progress="progress = $event.detail.progress">

                    <input wire:model="images"
                        class="block w-full mb-5 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="images" type="file" accept=".jpg, .jpeg, .png, .webp">

                    <div x-show="isUploading">
                        <progress max="100" x-bind:value="progress"></progress>
                    </div>

                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PNG, JPG, JPEG, WEBP
                        (recommended. 800x400px).</p>

                    @error('images.*')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">Oh,snapp!</span>
                            {{ $message }}.</p>
                    @enderror
                    <p class="mt-2 text-xs text-red-600 dark:text-red-500">{{ $error }}.</p>

            </li>
        </ol>



        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <span wire:loading.remove wire:target="submit">Save</span>

            <div wire:loading wire:target="submit">
                <svg role="status" class="inline mr-2 w-4 h-4 text-gray-200 animate-spin dark:text-gray-600"
                    viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                        fill="currentColor" />
                    <path
                        d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                        fill="#1C64F2" />
                </svg>
                Loading...
            </div>
        </button>
    </form>
</div>
