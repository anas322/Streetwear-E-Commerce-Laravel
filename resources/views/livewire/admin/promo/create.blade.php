<div>
    <form wire:submit.prevent="submit" class="pb-24 ml-4" id="productSubmit">

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
                <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Base promo name</h3>
                <span class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500 pb-4">Add
                    the
                    promo code name </span>

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
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Promo
                            Code
                            Name</label>
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
                <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Base promo code type</h3>
                <span class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500 pb-4">Add
                    the
                    promo code type </span>

                <div>
                    <div class="relative z-0 mb-6 w-full group">

                        <label for="promo_type" class="sr-only">choose type</label>
                        <select id="promo_type" wire:model="type"
                            class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                            <option disabled>Choose a type</option>
                            <option value="product">Amount off Products</option>
                            <option value="order">Amount off Order</option>
                        </select>

                        @error('type')
                            <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">Oh,
                                    snapp!</span> {{ $message }}.</p>
                        @enderror
                        <label for="type"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Promo
                            Code
                            type</label>
                    </div>
                </div>


                @if ($type == 'product')
                    <!-- Modal toggle -->
                    <button wire:click="$toggle('toggleModal')"
                        class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="button">
                        Select Products
                    </button>

                    <!-- Main modal -->
                    @if ($toggleModal)
                        <div
                            class="fixed top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div
                                class="relative top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full max-w-2xl max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div
                                        class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            Products
                                        </h3>
                                        <button type="button" wire:click="$toggle('toggleModal')"
                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-hide="productsModal">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="max-h-[37rem] overflow-auto p-6 space-y-6">
                                        <div class="flex flex-col flex-wrap gap-4">
                                            @foreach ($products as $product)
                                                <div class="flex flex-row justify-between items-center ">
                                                    <div>
                                                        <img src="{{ asset('/storage/' . $product->productImages[0]->image) }}"
                                                            class="w-12 h-auto">
                                                    </div>

                                                    <div>
                                                        <span>{{ $product->name }}</span>
                                                    </div>

                                                    <div>

                                                        <button type="button"
                                                            wire:click="toggleProductListOfIds({{ $product->id }})"
                                                            class="p-1 rounded-full  hover:bg-zinc-900/20"
                                                            style="backdrop-filter: blur(5px);">

                                                            @if ($this->isProductSelected($product->id))
                                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    xmlns:svgjs="http://svgjs.com/svgjs" width="512"
                                                                    height="512" x="0" y="0"
                                                                    viewBox="0 0 512 512"
                                                                    style="enable-background:new 0 0 512 512"
                                                                    xml:space="preserve" class="w-5 h-auto">
                                                                    <g>
                                                                        <g data-name="Layer 2">
                                                                            <circle cx="256" cy="256"
                                                                                r="256" fill="#f32121"
                                                                                data-original="#2196f3" class="">
                                                                            </circle>
                                                                            <rect width="270" height="77.4"
                                                                                x="121" y="217.3"
                                                                                fill="#ffffff" rx="38.7"
                                                                                data-original="#ffffff"
                                                                                class="">
                                                                            </rect>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            @else
                                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    xmlns:svgjs="http://svgjs.com/svgjs"
                                                                    width="512" height="512" x="0"
                                                                    y="0" viewBox="0 0 64 64"
                                                                    style="enable-background:new 0 0 512 512"
                                                                    xml:space="preserve" class="w-5 h-auto">
                                                                    <g>
                                                                        <linearGradient id="a" x1="3.346"
                                                                            x2="60.654" y1="31.924"
                                                                            y2="31.924"
                                                                            gradientUnits="userSpaceOnUse">
                                                                            <stop offset="0" stop-color="#096fe0">
                                                                            </stop>
                                                                            <stop offset=".158" stop-color="#167ce3">
                                                                            </stop>
                                                                            <stop offset="1" stop-color="#5ec3f6">
                                                                            </stop>
                                                                        </linearGradient>
                                                                        <path fill="url(#a)"
                                                                            d="M32 2.924C16.204 2.924 3.346 15.968 3.346 32c1.571 38.571 55.743 38.56 57.308 0C60.654 15.968 47.796 2.924 32 2.924zm14.386 32.799H36.334c-.597 0-1.085.503-1.085 1.117v10.195c-.154 4.925-7.221 4.94-7.374 0V36.84c0-.614-.488-1.117-1.084-1.117H16.728c-2.028 0-3.687-1.666-3.687-3.723s1.659-3.722 3.687-3.722H26.79c.596 0 1.084-.503 1.084-1.118V16.965c0-2.057 1.649-3.733 3.687-3.733 2.028 0 3.687 1.676 3.687 3.733V27.16c0 .615.488 1.118 1.085 1.118h10.052c4.88.151 4.895 7.288 0 7.445z"
                                                                            data-original="url(#a)"></path>
                                                                    </g>
                                                                </svg>
                                                            @endif
                                                        </button>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <!-- Modal footer -->
                                    <div
                                        class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                        <button type="button" wire:click="AddToSelectedProducts"
                                            class="text-white bg-blue-600 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Done
                                            ({{ $selectedProductIds->count() }}) </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    <div>

                    </div>
                @endif

                @if (count($selectedProducts) > 0 && $type == 'product')
                    <div class="max-h-[37rem] overflow-auto p-6 space-y-6">
                        <div class="flex flex-col flex-wrap gap-4">
                            @foreach ($selectedProducts as $product)
                                <div class="flex flex-row justify-between items-center ">
                                    <div>
                                        <img src="{{ asset('/storage/' . $product->productImages[0]->image) }}"
                                            class="w-12 h-auto">
                                    </div>

                                    <div>
                                        <span>{{ $product['name'] }}</span>
                                    </div>

                                    <div>

                                        <button type="button"
                                            wire:click="deleteProductFromProductList({{ $product['id'] }})"
                                            class="p-2 rounded-full  hover:bg-zinc-900/20"
                                            style="backdrop-filter: blur(5px);">
                                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512"
                                                x="0" y="0" viewBox="0 0 512 512"
                                                style="enable-background:new 0 0 512 512" xml:space="preserve"
                                                class="w-5 h-auto">
                                                <g>
                                                    <path fill="#fc0005" fill-rule="evenodd"
                                                        d="M170.8 14.221A14.21 14.21 0 0 1 185 .014L326.991.006a14.233 14.233 0 0 1 14.2 14.223v35.117H170.8zm233.461 477.443a21.75 21.75 0 0 1-21.856 20.33H127.954a21.968 21.968 0 0 1-21.854-20.416L84.326 173.06H427.5l-23.234 318.6zm56.568-347.452H51.171v-33A33.035 33.035 0 0 1 84.176 78.2l343.644-.011a33.051 33.051 0 0 1 33 33.02v33zm-270.79 291.851a14.422 14.422 0 1 0 28.844 0V233.816a14.42 14.42 0 0 0-28.839-.01v202.257zm102.9 0a14.424 14.424 0 1 0 28.848 0V233.816a14.422 14.422 0 0 0-28.843-.01z"
                                                        data-original="#fc0005" class=""></path>
                                                </g>
                                            </svg>

                                        </button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
                @if (session('productList'))
                    <div class="alert alert-success">
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">Oh,
                                snapp!</span> {{ session('productList') }}.</p>

                    </div>
                @endif
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
                <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Base promo code value</h3>
                <span class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500 pb-4">Add
                    the
                    promo code value </span>

                <div>
                    <div class="flex mt-6">
                        <span
                            class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                            @if ($value_type_state)
                                %
                            @else
                                EGP
                            @endif
                        </span>
                        <input type="number" step="0.01" wire:model="value" min="0" id="value"
                            class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="">
                    </div>

                    @error('value')
                        <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">Oh,
                                snapp!</span> {{ $message }}.</p>
                    @enderror

                    <div class="pt-6">
                        <label class="relative inline-flex items-center mb-5 cursor-pointer">
                            <input type="checkbox" wire:model="value_type_state" value=""
                                class="sr-only peer">
                            <div
                                class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                            </div>
                            <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Change
                                between(EGP - %)</span>
                        </label>
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
                <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Conditions</h3>
                <span class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500 pb-4">Add
                    the
                    promo code conditions </span>

                <div>
                    <div class="relative z-0 mb-6 w-full group">

                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" wire:model="min_purchase_state" value=""
                                class="sr-only peer">
                            <div
                                class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                            </div>
                            <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Minimum
                                purchase
                                amount</span>
                        </label>

                        @if ($min_purchase_state)
                            <div class="flex mt-6">
                                <span
                                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                    EGP
                                </span>
                                <input type="number" step="0.01" wire:model="min_purchase_value" min="0"
                                    id="min_purchase_value"
                                    class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="">
                            </div>

                            @error('min_purchase_value')
                                <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">Oh,
                                        snapp!</span> {{ $message }}.</p>
                            @enderror
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
                <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Usage</h3>
                <span class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500 pb-4">Add
                    any
                    usage limits </span>

                <div>
                    <div class="relative z-0 mb-6 w-full space-y-2 group">
                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input wire:model="purchase_once" id="purchase_once" type="checkbox" value=""
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="purchase_once"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">A
                                customer is limited to redeem the code only once</label>

                        </div>

                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input wire:model="must_login" id="must_login" type="checkbox" value=""
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="must_login"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Only
                                allow logged in customers</label>
                        </div>

                        <div class="flex items-center pl-4 border border-gray-200 rounded dark:border-gray-700">
                            <input wire:model="max_usage_state" id="max_usage_state" type="checkbox" value=""
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="max_usage_state"
                                class="w-full py-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">The
                                code
                                has a total usage limit across the whole store</label>
                        </div>

                        @if ($max_usage_state)
                            <div class="-pl-12 pt-4">
                                <label for="max_usage"
                                    class="block mb-2 text-sm font-bold text-gray-900 dark:text-white">Total Usage
                                    Limit</label>
                                <div class="flex">
                                    <input type="number" wire:model="max_usage" min="0" id="max_usage"
                                        class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="">
                                </div>

                                @error('max_usage')
                                    <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">Oh,
                                            snapp!</span> {{ $message }}.</p>
                                @enderror
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
                <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Date</h3>
                <span class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500 pb-4">set
                    the
                    data that the code is avaiable </span>

                <div>
                    <div class="relative z-0 mb-6 w-full group">
                        <div class="mb-6">
                            <label for="start_date"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start
                                Date</label>
                            <input type="date" wire:model="start_date" id="start_date" min="{{ date('Y-m-d') }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>

                        @error('start_date')
                            <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">Oh,
                                    snapp!</span> {{ $message }}.</p>
                        @enderror

                        <div class="flex items-center mb-4">
                            <input wire:model="end_date_state" id="endDateState" type="checkbox" value=""
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="endDateState"
                                class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Select End
                                Date</label>
                        </div>
                        @if ($end_date_state)
                            <div class="mb-6">
                                <label for="end_date"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">End
                                    Date</label>
                                <input type="date" wire:model="end_date" id="end_date"
                                    min="{{ date('Y-m-d') }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>

                            @error('end_date')
                                <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">Oh,
                                        snapp!</span> {{ $message }}.</p>
                            @enderror
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
                <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Status</h3>
                <span class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500 pb-4">select
                    the status of the product</span>

                <div>
                    <div class="relative z-0 mb-6 w-full group">

                        <label for="status" class="sr-only">select</label>
                        <select id="status" wire:model="status"
                            class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                            <option>Choose Status</option>
                            <option value="Active">Active</option>
                            <option value="Draft">Draft</option>
                        </select>
                        @error('status')
                            <p class="mt-2 text-xs text-red-600 dark:text-red-500"><span class="font-medium">Oh,
                                    snapp!</span> {{ $message }}.</p>
                        @enderror
                    </div>
                </div>
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
