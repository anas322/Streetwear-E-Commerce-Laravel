@props(['active'])

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
        <span class="text-gray-500 font-bold text-lg font-roboto">${{ $tax}}</span>
    </div>

    <div class="flex justify-between items-center border-b border-gray-200 pb-5">
        <span class="font-bold text-lg font-roboto">Tax</span>
        <span class="text-gray-500 font-bold text-lg font-roboto">$0.00</span>
    </div>

    <div class="flex justify-between items-center  pb-5">
        <span class="font-bold text-lg font-roboto">Total</span>
        <span class="text-gray-900 font-bold text-2xl">${{ $totalPrice }}</span>
    </div>
</div>

@if (!$order)
<form action="{{ route('orders.store') }}" method="POST">
    @csrf
    <button class="w-full py-4 block uppercase text-base text-center bg-slate-800 text-white"> check out</button>
</form>
@endif

