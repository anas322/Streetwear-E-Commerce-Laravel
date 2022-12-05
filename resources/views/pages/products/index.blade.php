<x-app-layout>
    {{-- background header  --}}
    <x-slot name="header">
        <div class="overflow-hidden h-64 sm:h-[50vh] pt-12">
            <img src="{{ asset('storage/products/header.jpeg') }}" class="object-cover h-full w-full"
                style="object-position: 13% 36%" alt="streetwearts prducts header background">
        </div>
    </x-slot>
    
    <div class="flex items-start pt-28 px-10 relative">
       <!-- left filter products -->
       <div class="basis-72 sticky-side-bar sticky top-0 md:inline-block hidden">
           <livewire:left-filter-products />
        </div>
        
        {{-- products section  --}}
        <div class="md:ml-10 flex-grow relative overflow-hidden">
            {{-- filter above products--}}
          <livewire:above-filter-products />

            {{-- products  --}}
            <livewire:product-view :products="$products"/>
            
        </div>
    </div>


    {{-- <!-- product quick view -->
    <livewire:product-quick-view /> --}}

</x-app-layout>
