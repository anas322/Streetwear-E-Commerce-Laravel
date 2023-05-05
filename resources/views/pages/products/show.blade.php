<x-app-layout>
    
    @push('scripts')
    @vite(['resources/js/products/shop.js'])
    @endpush

    <livewire:product-show :productId="$product->id" />
    
</x-app-layout>
