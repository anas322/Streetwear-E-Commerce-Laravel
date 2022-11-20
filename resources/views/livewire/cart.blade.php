<div class="container mx-auto pb-8 px-4">

    <header class="mt-24">
        <h1 class="font-bold text-7xl block font-mono pb-8 text-gray-800">shpping cart</h1>
        <span class="text-gray-500 font-medium text-lg">You have 5 items in your cart.</span>
    </header>
    <div class="xl:flex xl:flex-row flex-col gap-x-12 space-y-8 pt-20 justify-between items-start">

   
        <div class="basis-3/4 flex flex-col gap-y-6 max-w-5xl">
            @for ($i = 0; $i < 5; $i++)
            <div class="flex justify-between items-start">
                <div>
                    <img class="w-auto sm:h-32 h-24 object-cover float-left" src="{{ asset('images/categories/image10.jpg') }}" >
                    <div class="float-right pl-4">
                        <p class="font-bold sm:text-2xl text-lg">Black blouse</p>
                        <p class="text-gray-500 sm:text-base text-sm">Size: Large</p>
                        <p class="text-gray-500 sm:text-base text-sm">Colour: Green</p>
                    </div>
                </div>

                <span class="sm:text-lg text-base font-bold" >$40</span>

                <span class="sm:text-lg text-base font-bold" >$80</span>

                <button class="text-4xl rotate-45 hover:rotate-180 transition duration-700 font-thin text-red-500">+</button>
            </div>

            @if ($i != 4)
            <hr />
            @endif

            @endfor

        </div>
        

        <div class="basis-1/4 shadow-lg rounded-lg">
            <header class="py-2 px-3 bg-gray-200 ">
                <span class="font-bold text-xl">Order Summary</span>
            </header>
            
            <div class="px-3 space-y-4">
                <p class="text-gray-500 font-medium text-lg py-3">Shipping and additional costs are calculated based on values you have entered.</p>
                
                <div class="flex justify-between items-center border-b border-gray-200 pb-4">
                    <span class="font-bold text-lg">Order Subtotal</span>
                    <span class="text-gray-500 font-bold text-lg">$200.00</span>
                </div>
                
                <div class="flex justify-between items-center border-b border-gray-200 pb-4">
                    <span class="font-bold text-lg">Shipping and handling</span>
                    <span class="text-gray-500 font-bold text-lg">$10.00</span>
                </div>
                
                <div class="flex justify-between items-center border-b border-gray-200 pb-4">
                    <span class="font-bold text-lg">Tax</span>
                    <span class="text-gray-500 font-bold text-lg">$0.00</span>
                </div>
                
                <div class="flex justify-between items-center border-b border-gray-200 pb-4">
                    <span class="font-bold text-lg">Total</span>
                    <span class="text-gray-500 font-bold text-xl">$210.00</span>
                </div>
            </div>

            
            <a href="">
                <span class="py-4 block uppercase text-base text-center bg-slate-800 text-white"> check out</span>
            </a>
        </div>
    </div>
</div>