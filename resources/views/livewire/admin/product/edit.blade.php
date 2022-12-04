<div>
    <form wire:submit.prevent="submit" class="pb-24">


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
                                <option value="{{ $cat->id }}" @selected($categoryId==$cat->id)>{{ $cat->name }}
                                </option>
                                @endforeach

                            </select>
                            @error('categoryId')
                            <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">Oh,
                                    snapp!</span> {{ $message }}.</p>
                            @enderror
                        </div>

                        {{-- <div class="relative z-0 mb-6 w-full group">
                            <input type="text" wire:model="slug" id="slug"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " />
                            @error('slug')
                            <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">Oh,
                                    snapp!</span> {{ $message }}.</p>
                            @enderror
                            <label for="slug"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Slug</label>
                        </div> --}}
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="number" wire:model="price" id="price" min=""
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " />
                            @error('price')
                            <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">Oh,
                                    snapp!</span> {{ $message }}.</p>
                            @enderror
                            <label for="price"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Price</label>
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

                        <div class="relative z-0 mb-6 w-full group">

                            <label for="status" class="sr-only">select</label>
                            <select id="status" wire:model="status"
                                class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">

                                <option selected>Choose Status</option>
                                <option value="Active"  @selected($status == 'Active')>Active</option>
                                <option value="Draft" @selected($status == 'Draft')>Draft</option>

                            </select>
                            @error('status')
                            <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">Oh,
                                    snapp!</span> {{ $message }}.</p>
                            @enderror
                        </div>

                        {{-- <div class="relative z-10 mb-6 w-full group">

                            <button id="dropdownSearchButton" data-dropdown-toggle="dropdownSearch"
                                class="flex items-center justify-between w-full py-2.5 px-0 text-sm font-medium text-center text-gray-500 border-0 border-b-2 border-gray-200 appearance-none   focus:ring-0 focus:outline-none   "
                                type="button">Select Colors <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg></button>

                            <!-- Dropdown menu -->
                            <div id="dropdownSearch" class="hidden z-10 w-60 bg-white rounded shadow dark:bg-gray-700">
                                <ul class="overflow-y-auto  px-3 py-3 h-48 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownSearchButton">
                                    @foreach ($load_colors as $color)
                                        <li>
                                            <div
                                                class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                                                <input type="checkbox" wire:model.defer="colors"  id="checkbox-item-{{$color->id}}"  value="{{$color->id}}"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                <label for="checkbox-item-{{$color->id}}"
                                                    class="ml-2 w-full text-sm font-medium text-gray-900 rounded dark:text-gray-300">{{$color->name}}</label>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                    
                            </div>



                            @error('colors')
                            <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">Oh,
                                    snapp!</span> {{ $message }}.</p>
                            @enderror
                        </div> --}}

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
                <span class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500 pb-4">Optional
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
                        <img src="{{ asset('/storage/'.$image) }}" width="100" height="100">
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

                    <input  wire:model="images"
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
