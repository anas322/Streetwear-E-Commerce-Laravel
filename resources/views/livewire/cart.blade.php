<div class="container mx-auto pb-8">

    <header class="mt-24">
        <h1 class="font-bold text-7xl block font-mono pb-8 text-gray-800">shpping cart</h1>
        <span class="text-gray-500 font-medium text-lg">You have 5 items in your cart.</span>
    </header>
    
    <div class="flex flex-col gap-y-6 pt-20 max-w-5xl">
        @for ($i = 0; $i < 5; $i++)
        <div class="flex justify-between items-start">
            <div>
                <img class="w-auto h-40 object-cover float-left" src="{{ asset('images/categories/image10.jpg') }}" >
                <div class="float-right pl-4">
                    <p class="font-bold text-2xl">Black blouse</p>
                    <p class="text-gray-500 text-base">Size: Large</p>
                    <p class="text-gray-500 text-base">Colour: Green</p>
                </div>
            </div>

            <span class="text-lg font-bold" >$40</span>

            <span class="text-lg font-bold" >$80</span>

            <button class="text-5xl rotate-45 hover:rotate-180 transition duration-700 font-extralight text-red-600">+</button>
        </div>
        @if ($i != 4)
        <hr />
        @endif
        @endfor
    </div>
    
</div>