<x-admin.app-layout>
    <div>
        <h1 class="font-roboto font-semibold text-2xl py-4 text-gray-800">Cateogries</h1>

    </div>

    @if ($errors->any())
        @foreach ($errors as $error)
            {{ $error}}
        @endforeach
    @endif

    <!-- table of categories -->
    
    <livewire:admin.category.index />

    

    
</x-admin.app-layout>
