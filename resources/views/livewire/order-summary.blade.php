<div>
    @if (session('error'))
        <div class="fixed top-10 left-1/2 -translate-x-1/2 z-50 flex p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800"
            role="alert" wire:poll>
            <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Info</span>
            <div>
                <span class="font-medium">{{ session('error') }}.
            </div>
        </div>
    @endif

    <header class="py-4 px-3 bg-gray-100 ">
        <span class="font-bold font-roboto text-xl">Order Summary</span>
    </header>

    <div class="px-3 space-y-4">
        <p class="text-gray-500 font-bold text-sm py-3 ">Shipping and additional costs are calculated based on values
            you
            have entered.</p>

        <div class="flex justify-between items-center border-b border-gray-200 pb-5">
            <span class="font-bold text-lg font-roboto">Order Subtotal</span>
            <span class="text-gray-500 font-bold text-lg font-roboto">${{ $subTotal }}</span>
        </div>

        <div class="flex justify-between items-center border-b border-gray-200 pb-5">
            <span class="font-bold text-lg font-roboto">Shipping and handling</span>
            <span class="text-gray-500 font-bold text-lg font-roboto">${{ $tax }}</span>
        </div>

        <div class="flex justify-between items-center border-b border-gray-200 pb-5">
            <span class="font-bold text-lg font-roboto">Tax</span>
            <span class="text-gray-500 font-bold text-lg font-roboto">$0.00</span>
        </div>

        <div class="border-b border-gray-200 pb-5">
            <div class="relative">
                <label for="Promo Code" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Promo
                    Code</label>
                <input type="text" wire:model="promoCode" id="Promo Code"
                    class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Promo Code">
                @if ($promoCodeButtonState)
                    <button type="button" wire:click="removePromoCode"
                        class="absolute right-2.5 bottom-2.5 text-sm px-4 py-2 font-medium text-red-600 dark:text-red-500 hover:underline">Remove</button>
                @else
                    <button type="button" wire:click="ApplyPromoCode"
                        class="text-white absolute right-2.5 bottom-2.5 bg-slate-700 hover:bg-slate-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Apply</button>
                @endif

            </div>
        </div>

        <div class="flex justify-between items-center  pb-5">
            <span class="font-bold text-lg font-roboto">Total</span>
            <div>
                @if ($oldTotalPrice)
                    <span
                        class="pr-3 text-gray-500 font-bold text-lg font-roboto line-through">${{ $oldTotalPrice }}</span>
                @endif
                <span class="text-gray-900 font-bold text-2xl">${{ $totalPrice }}</span>
            </div>
        </div>
    </div>

    @if (!$order)
        <form action="{{ route('orders.store') }}/?promo={{ $promoId }}" method="POST">
            @csrf
            <button class="w-full py-4 block uppercase text-base text-center bg-slate-800 text-white"> check
                out</button>
        </form>
    @endif
</div>
