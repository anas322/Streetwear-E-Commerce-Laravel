<x-app-layout>
    {{-- background header  --}}
    <x-slot name="header">
        <div class="overflow-hidden h-64 sm:h-[50vh] pt-12">
            <img src="{{ asset('images/products/header.jpeg') }}" class="object-cover h-full w-full"
                style="object-position: 13% 36%" alt="streetwearts prducts header background">
        </div>
    </x-slot>
    
    <div class="flex items-start pt-28 px-10 relative">
       <!-- left filter products -->
       <div class="sticky-side-bar sticky top-0 md:inline-block hidden">
           <livewire:left-filter-products />
        </div>
        
        {{-- products section  --}}
        <div class="md:ml-10 flex-grow relative overflow-hidden">
            {{-- filter above products--}}
          <livewire:above-filter-products />
          
            <div class="flex flex-wrap gap-y-8">
                {{-- images  --}}
                @for ($i = 0; $i < 10; $i++)
                    <livewire:product-view />
                @endfor
            </div>
        </div>
    </div>


    <!-- product quick view -->
    <livewire:product-quick-view />

</x-app-layout>
