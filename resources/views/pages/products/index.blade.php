<x-app-layout>
    {{-- background header  --}}
    <x-slot name="header">
        <div class="overflow-hidden h-64 sm:h-[50vh]">
            <img src="{{ asset('images/products/header.jpeg') }}" class="object-cover h-full w-full"
                style="object-position: 13% 36%" alt="streetwearts prducts header background">
        </div>
    </x-slot>

    <div class="flex gap-x-8 py-28 mb-8 overflow-x-hidden">
       <!-- left filter products -->
        <livewire:left-filter-products />
        
        {{-- products section  --}}
        <div class="w-full md:pr-8 px-8 md:pl-0 ">
            {{-- filter above products--}}
          <livewire:above-filter-products />

            <div class="grid sm:grid-cols-6 grid-cols-1 2xl:gap-x-12 xl:gap-x-10 gap-x-4 sm:gap-y-28 gap-y-32 w-full">
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
