<div>
    <header class="py-4 px-3 bg-gray-100 ">
        <span class="font-bold font-roboto text-xl">Order Summary</span>
    </header>

    <div class="px-3 space-y-4">
        <p class="text-gray-500 font-bold text-sm py-3 ">Shipping and additional costs are calculated based on values you
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
                <button type="button" wire:click="ApplyPromoCode"
                    class="text-white absolute right-2.5 bottom-2.5 bg-slate-700 hover:bg-slate-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Apply</button>
            </div>
        </div>

        <div class="flex justify-between items-center  pb-5">
            <span class="font-bold text-lg font-roboto">Total</span>
            <span class="text-gray-900 font-bold text-2xl" wire:click="test">${{ $totalPrice }}</span>
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
